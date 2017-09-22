<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Factory;
use App\DailyExpense;
use App\MonthlyCategory;
use App\Type;
use Carbon\Carbon;
use App\User;



class DashboardController extends Controller
{

    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // checking to see if get variable tour is set and assigning the value of 1, else assigning the value of 0.
        $tour = isset($_GET['tour']) ? 1 : 0;

        // returns the correct step in onboarding based off what step the user has completed already.
        $step = OnBoardingController::checkOnboardStep();
        if ($step) {
            return OnBoardingController::onBoardTriager($step);
        }

        // joining monthly_expenses and monthly_category tables returning the result set per authenticated user.
        $monthly_expenses = DB::table('monthly_expenses')
            ->join('monthly_category', 'monthly_category.id', 'monthly_expenses.monthly_category_id')
            ->where('user_id', '=', auth()->user()->id)
            ->get();

        // joining daily_expenses and daily_category tables returning the result set per authenticated user.
        $daily_expenses = DB::table('daily_expenses')
            ->join('daily_category', 'daily_category.id', 'daily_expenses.daily_category_id')
            ->where('user_id', '=', auth()->user()->id)
            ->select('daily_expenses.*')
            ->get();

        // returns the daily_expenses along with daily_category_title for the last week
        $daily_title = DailyExpense::join('daily_category', 'daily_category.id', 'daily_expenses.daily_category_id')
            ->where('user_id', '=', auth()->user()->id)
            ->where('daily_expenses.created_at', '>', DB::raw('CURDATE() - INTERVAL 1 WEEK'))
            ->select('daily_expenses.*', 'daily_category.title')
            ->orderby('daily_expenses.created_at', 'desc')
            ->get();

        // loop through the DAILY_CATEGORY_IDS
        // running a Query Builder to retrieve the $key and $val
        $expense_chart_data = [];
        foreach (Category::DAILY_CATEGORY_IDS as $key => $val) {
            $category_expenses = DailyExpense::join('daily_category', 'daily_category.id', 'daily_expenses.daily_category_id')
                ->where('user_id', '=', auth()->user()->id)
                ->where('daily_expenses.daily_category_id', '=', $key)
                ->where('daily_expenses.created_at', '>', DB::raw('CURDATE() - INTERVAL 6 DAY'))// get expenses for the last week
                ->select(DB::raw('DATE_FORMAT(daily_expenses.created_at, "%m-%d-%Y") as theDay'), DB::raw('SUM(daily_expenses.amount) as sum'), 'daily_category.id', 'daily_category.title')
                ->groupBy('theDay')
                ->get();
            $expense_chart_data[$val] = $category_expenses;
        }


        // the result set is converted to json to be used in ChartJs
        $expense_chart_data = json_encode($expense_chart_data);

        // returning monthly expenses with the monthly_expense type id = INCOME
        $income =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('type_id', '=', Type::INCOME)
                ->sum('amount');

        // returning monthly expenses with the monthly_expense type id = EXPENSE
        $expense =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('type_id', '=', Type::EXPENSE)
                ->sum('amount');

        // returning daily_expenses on or after reference date per authenticated user
        $daily_value =
            DB::table('daily_expenses')
                ->join('users', 'users.id', '=', 'daily_expenses.user_id')
                ->where('daily_expenses.user_id', '=', auth()->user()->id)
                ->whereRaw('daily_expenses.created_at >= users.reference_date')
                ->sum('amount');

        // returns the save_percent per authenticated user
        $save_percent =
            DB::table('users')
                ->where('id', '=', auth()->user()->id)
                ->select('save_percent')
                ->get();

        // returns the time between the reference date and next sunday in seconds
        $next_sunday = date('Y-m-d', strtotime('next sunday'));
        $datediff = strtotime($next_sunday) - strtotime(auth()->user()->reference_date);
        $daysBetween = floor($datediff / (60 * 60 * 24));

        // returns the difference between the user's monthly income and monthly expense in the onboarding
        $monthly_sum = $income - $expense;

        // returns the save percent per authenticated user
        $monthly_savings = auth()->user()->save_percent;

        $savings_sum = $monthly_sum * $monthly_savings;

        $monthly_total = $monthly_sum - $savings_sum;

        $daily_total = ($monthly_total * 12) / 365;

        // returns the weekly amount pro rated to sunday set to two decimal places
        $weekly_amount = number_format(($daysBetween * $daily_total) - $daily_value, 2);

        return view('home', compact('monthly_expenses', 'daily_expenses', 'daily_title',
            'expense_chart_data', 'weekly_amount', 'daily_value', 'monthly_category', 'save_percent',
            'reference_date', 'tour'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function dailyTotal()
    {
        // Validates the listed fields
        $this->validate(request(), [
            'amount' => 'required|numeric',

            'daily_category_id' => 'required'

        ]);

        // creates a new DailyExpense object with listed form data
        auth()->user()->record(

            new DailyExpense(request([

                'daily_category_id',

                'amount'

            ]))
        );

        return redirect('/home');

    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function newReferenceDate(Request $request)
    {
        // Validates the listed fields
        $this->validate(request(), [

            'reference_date' => 'required',

        ]);
        // assigning the request object and all of its methods to $data
        // instantiating a new authenticated User object.
        // the reference_date received will overwrite the one before
        $data = $request->all();
        $user = User::where('id', '=', auth()->user()->id)
                    ->first();

        $user->reference_date = date('Y-m-d', strtotime($data['reference_date']));
        $user->save();


        flash()->success('Great!', 'You updated your weekly budget start date');

        return redirect('home');

    }


}















  
