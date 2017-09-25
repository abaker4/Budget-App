<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MonthlyExpense;
use App\User;

class OnBoardingController extends Controller
{

    protected $guarded = [];

    /**
     * OnBoardingController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Query Users table and grabs the first entry in a collection that passes the given truth test
     * and is also an authenticated user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function start()
    {
        $user = DB::table('users')
                    ->where('id', '=', auth()->user()->id)
                    ->first();

        return view('onboard.start', compact('user'));
    }

    /**
     * Query Monthly Expenses table and grabs the first entry in a collection that passes the given truth test,
     * is an authenticated user, and its Monthly Category is Income
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function income()
    {
        $income =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('monthly_category_id', '=', Category::INCOME)
                ->first();

        return view('onboard.income', compact('income'));
    }

    /**
     * Query Monthly Expenses table and grabs the first entry in a collection that passes the given truth test,
     * is an authenticated user, and its Monthly Category is Housing
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function housing()
    {
        $housing =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('monthly_category_id', '=', Category::HOUSING)
                ->first();

        return view('onboard.housing', compact('housing'));
    }

    /**
     * Query Monthly Expenses table and grabs the first entry in a collection that passes the given truth test,
     * is an authenticated user, and its Monthly Category is Utilities
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function utilities()
    {
        $utilities =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('monthly_category_id', '=', Category::UTILITIES)
                ->first();

        return view('onboard.utilities', compact('utilities'));
    }

    /**
     * Query Monthly Expenses table and grabs the first entry in a collection that passes the given truth test,
     * is an authenticated user, and its Monthly Category is Insurances
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function insurances()
    {
        $insurances =
        DB::table('monthly_expenses')
            ->where('user_id', '=', auth()->user()->id)
            ->where('monthly_category_id', '=', Category::INSURANCES)
            ->first();

        return view('onboard.insurances', compact('insurances'));
    }

    /**
     * Query Monthly Expenses table and grabs the first entry in a collection that passes the given truth test,
     * is an authenticated user, and its Monthly Category is Memberships
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function memberships()
    {
        $memberships =
        DB::table('monthly_expenses')
            ->where('user_id', '=', auth()->user()->id)
            ->where('monthly_category_id', '=', Category::MEMBERSHIPS)
            ->first();

        return view('onboard.memberships', compact('memberships'));
    }

    /**
     * Query Users table and grabs the first entry in a collection that passes the given truth test,
     * is an authenticated user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function savings()
    {
        $savings =
            DB::table('users')
                ->where('id', '=', auth()->user()->id)
                ->first();

        return view('onboard.savings', compact('savings'));
    }

    /**
     * Query Users table and grabs the first entry in a collection that passes the given truth test,
     * is an authenticated user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function savingsPercentage()
    {
        $savings =
            DB::table('users')
                ->where('id', '=', auth()->user()->id)
                ->first();

        return view('onboard.savings_percentage', compact('savings'));
    }

    /**
     * Returns the Finish View
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function finish()
    {
        return view('onboard.finish');
    }


    /**
     * creates/updates entry for each step in the onboarding process
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // Validates the listed fields
        $this->validate(request(), [
            'amount' => 'required|numeric',
            'monthly_category_id' => 'required',
            'type_id' => 'required'
        ]);

            $data = $request->all();
        // if the monthly_expense_id exists in the form data run this query
        // if it finds a record update it with new values
        // if no record or there is no monthly_expense_id create a new monthly expense object and save a new record
        if (!empty($data['id'])) {
            $monthly_expense = MonthlyExpense::where('id', '=', $data['id'])
                ->where('user_id', '=', auth()->user()->id)// make sure user owns this record
                ->first();

        } else {
            $monthly_expense = new MonthlyExpense();
            $monthly_expense->user_id = auth()->user()->id;
        }

            $monthly_expense->type_id = $data['type_id'];
            $monthly_expense->monthly_category_id = $data['monthly_category_id'];
            $monthly_expense->amount = $data['amount'];
            $monthly_expense->save();


        return redirect('/home');

    }

    /**
     * creates/updates savings in onboarding process
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeSavingPercentage(Request $request)
    {

        $this->validate(request(), [
           'save_percent' => 'required|numeric',
            'type_id' => 'required'
        ]);
            $data = $request->all();
        // if the user_id exists in the form data run this query
        // if it finds a record update it with new values
        // if no record or there is no user_id create a new user object and save a new record
        if (!empty($data['id'])) {
            $user = User::where('id', '=', $data['id'])
                ->first();
        } else {
            $user = new User();
        }

            $user->save_percent = $data['save_percent']/100;
            $user->save();

        return redirect('/home');
    }

    /**
     * creates/updates savings in onboarding process
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeSaving(Request $request)
    {

        $this->validate(request(), [
            'save_percent' => 'required|numeric',
            'type_id' => 'required'
        ]);

            $data = $request->all();
        // if the user_id exists in the form data run this query
        // if it finds a record update it with new values
        // if no record or there is no user_id create a new user object and save a new record
        // redirect to last step in onboarding
        if (!empty($data['id'])) {
            $user = User::where('id', '=', $data['id'])
                ->first();

        } else {
            $user = new User();
        }

            $user->save_percent = $data['save_percent']/100;
            $user->save();

        return redirect('/onboard/finish');
    }

    /**
     *  Navigates the new user to whichever step that isn't completed, if finished it redirects '/home'
     * @param $step
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public static function onBoardTriager($step)
    {

        switch($step) {

            case 1:
                return redirect('/onboard/income');
            break;

            case 2:
                return redirect('/onboard/housing');
            break;

            case 3:
                return redirect('/onboard/utilities');
            break;

            case 4:
                return redirect('/onboard/insurances');
            break;

            case 5:
                return redirect('/onboard/memberships');
            break;

            case 6:
                return redirect('/onboard/savings');
             break;

            default:
                return redirect('/home');
            break;
        }

    }

    /**
     * Loops through each of the steps to make sure the user has completed them
     * and also has a saving percentage before returning home
     * @return bool|int
     */
    public static function checkOnboardStep() {

        // Query getting monthly_category_id in ascending order based on authenticated user
        $array_of_expenses = DB::table('monthly_expenses')
            ->where('user_id', '=', auth()->user()->id)
            ->orderBy('monthly_category_id', 'asc')
            ->get();

        $step = false;
        // if not set or have completed the step based on monthly_category_id go to that step
        for ($i = 1; $i <= 5; $i++) {
            if (!isset($array_of_expenses[$i-1]) ||
                $array_of_expenses[$i-1]->monthly_category_id !== $i) {
                $step = $i;
                break;
            }
        }
        // if step isn't completed and doesn't have  a save_percent go to step 6
        if (!$step && !auth()->user()->save_percent) {
            $step = 6;
        }

        return $step;
        
    }
}
