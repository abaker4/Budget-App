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



class DashboardController extends Controller
{


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

        $step = OnBoardingController::checkOnboardStep();
        if ($step) {
            return OnBoardingController::onBoardTriager($step);
        }

        $monthly_expenses = DB::table('monthly_expenses')
            ->join('monthly_category', 'monthly_category.id', 'monthly_expenses.monthly_category_id')
            ->where('user_id', '=', auth()->user()->id)
            ->get();



        $daily_expenses = DB::table('daily_expenses')
            ->join('daily_category', 'daily_category.id', 'daily_expenses.daily_category_id')
            ->where('user_id', '=', auth()->user()->id)
            ->select('daily_expenses.*')
            ->get();


        $daily_title = DailyExpense::join('daily_category', 'daily_category.id', 'daily_expenses.daily_category_id')
            ->where('user_id', '=', auth()->user()->id)
            ->select('daily_expenses.*', 'daily_category.title')
            ->orderby('daily_expenses.created_at', 'desc')
            ->get();


//        $sql = "SELECT DATE_FORMAT(D.created_at, '%m-%d-%Y') as theDay,
//                  SUM(D.amount) as sum,
//                  D.daily_category_id,
//                  DC.title
//                FROM daily_expenses D
//                  JOIN daily_category DC ON D.daily_category_id = DC.id
//                WHERE user_id = ?
//                  AND D.daily_category_id = ?
//                GROUP BY theDay";
        $expense_chart_data = [];
        foreach (Category::DAILY_CATEGORY_IDS as $key => $val) {
            $category_expenses = DailyExpense::join('daily_category', 'daily_category.id', 'daily_expenses.daily_category_id')
                ->where('user_id', '=', auth()->user()->id)
                ->where('daily_expenses.daily_category_id', '=', $key)
                ->where('daily_expenses.created_at', '>', DB::raw('CURDATE() - INTERVAL 6 DAY')) // get expenses for the last week
                ->select(DB::raw('DATE_FORMAT(daily_expenses.created_at, "%m-%d-%Y") as theDay'), DB::raw('SUM(daily_expenses.amount) as sum'), 'daily_category.id', 'daily_category.title')
                ->groupBy('theDay')
                ->get();
            $expense_chart_data[$val] = $category_expenses;
        }

        $expense_chart_data = json_encode($expense_chart_data); // json encode so we can use in js

        $income =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('type_id', '=', Type::INCOME)
                ->sum('amount');

        $expense =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('type_id', '=', Type::EXPENSE)
                ->sum('amount');

        $daily_value =
            DB::table('daily_expenses')
                ->join('users', 'users.id', '=', 'daily_expenses.user_id')
                ->where('daily_expenses.user_id', '=', auth()->user()->id)
                ->whereRaw('daily_expenses.created_at >= users.reference_date')
                ->sum('amount');

        $new_ref =
            DB::table('users')
                ->where('id', '=', auth()->user()->id)
                ->select('reference_date')
                ->get();

        $save_percent =
            DB::table('users')
                ->where('id', '=', auth()->user()->id)
                ->select('save_percent')
                ->get();

        // changes the Reference Date to tomorrow
        $date = date_create(strtotime($new_ref));
        date_add($date, date_interval_create_from_date_string('CURDATE() + 1 days'));
        $new_ref_date = date_format($date, 'Y-m-d');



        $last_sunday = date('Y-m-d',strtotime('last sunday'));

        $next_sunday = date('Y-m-d',strtotime('next sunday'));
        $datediff = strtotime($next_sunday) - strtotime(auth()->user()->reference_date);
        $daysBetween = floor($datediff / (60 * 60 * 24));


        $monthly_sum = $income - $expense;

        $monthly_savings = auth()->user()->save_percent;

        $savings_sum = $monthly_sum * $monthly_savings;

        $monthly_total = $monthly_sum - $savings_sum;

        $daily_total = ($monthly_total * 12) / 365;

        $weekly_amount = number_format(($daysBetween * $daily_total) - $daily_value, 2);


        return view('home', compact('monthly_expenses', 'daily_expenses', 'daily_title', 'expense_chart_data', 'weekly_amount', 'daily_value', 'monthly_category', 'save_percent'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function dailyTotal()
    {

        $this->validate(request(),[
            'amount' => 'required',

            'daily_category_id' => 'required'

        ]);

        auth()->user()->record(

            new DailyExpense(request([

                'daily_category_id',

                'amount'

            ]))
        );

        return redirect('/home');

    }










}















  
