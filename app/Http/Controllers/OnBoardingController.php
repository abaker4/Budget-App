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

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function start()
    {
        $user = DB::table('users')
            ->where('id', '=', auth()->user()->id)
            ->first();

        return view('onboard.start', compact('user'));
    }


    public function income()
    {
        $income =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('monthly_category_id', '=', Category::INCOME)
                ->first();

        return view('onboard.income', compact('income'));
    }


    public function housing()
    {
        $housing =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('monthly_category_id', '=', Category::HOUSING)
                ->first();

        return view('onboard.housing', compact('housing'));
    }

    public function utilities()
    {
        $utilities =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('monthly_category_id', '=', Category::UTILITIES)
                ->first();

        return view('onboard.utilities', compact('utilities'));
    }


    public function insurances()
    {
        $insurances =
        DB::table('monthly_expenses')
            ->where('user_id', '=', auth()->user()->id)
            ->where('monthly_category_id', '=', Category::INSURANCES)
            ->first();

        return view('onboard.insurances', compact('insurances'));
    }


    public function memberships()
    {
        $memberships =
        DB::table('monthly_expenses')
            ->where('user_id', '=', auth()->user()->id)
            ->where('monthly_category_id', '=', Category::MEMBERSHIPS)
            ->first();

        return view('onboard.memberships', compact('memberships'));
    }


    public function savings()
    {
        $savings =
            DB::table('users')
            ->where('id', '=', auth()->user()->id)
            ->first();


        return view('onboard.savings', compact('savings'));

    }


    public function savingsPercentage()
    {
        $savings =
            DB::table('users')
                ->where('id', '=', auth()->user()->id)
                ->first();


        return view('onboard.savings_percentage', compact('savings'));

    }

    public function finish()
    {

        return view('onboard.finish');
    }



    public function store(Request $request)
    {
        $data = $request->all();
        // if the monthly_expense_id exists in the form data run this query
        // if it finds a record update it with new values
        // if no record or there is no monthly_expense_id create a new monthly expense object and save a new record
        if (!empty($data['id'])) {
            $monthly_expense = MonthlyExpense::where('id', '=', $data['id'])
                ->where('user_id', '=', auth()->user()->id)// make sure user owns this record
                ->first();

            // @todo add in a check to make sure this exists, if not redirect out with a message
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

    public function storeSavingPercentage(Request $request)
    {
        $data = $request->all();
        // if the monthly_expense_id exists in the form data run this query
        // if it finds a record update it with new values
        // if no record or there is no monthly_expense_id create a new monthly expense object and save a new record
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


    public function storeSaving(Request $request)
    {
        $data = $request->all();
        // if the monthly_expense_id exists in the form data run this query
        // if it finds a record update it with new values
        // if no record or there is no monthly_expense_id create a new monthly expense object and save a new record
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
     * @return bool|int
     */
    public static function checkOnboardStep() {

        $array_of_expenses = DB::table('monthly_expenses')
            ->where('user_id', '=', auth()->user()->id)
            ->orderBy('monthly_category_id', 'asc')
            ->get();

        $step = false;

        for ($i = 1; $i <= 5; $i++) {
            if (!isset($array_of_expenses[$i-1]) ||
                $array_of_expenses[$i-1]->monthly_category_id !== $i) {
                $step = $i;
                break;
            }
        }

        if (!$step && !auth()->user()->save_percent) {
            $step = 6;
        }


        return $step;

    }
}
