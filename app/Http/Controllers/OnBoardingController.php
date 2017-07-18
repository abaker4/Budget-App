<?php

namespace App\Http\Controllers;

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




    public function instructions()
    {

        return view('onboard.instructions');
    }


    public function income()
    {

        return view('onboard.income');
    }


    public function housing()
    {

        return view('onboard.housing');
    }


    public function utilities()
    {

        return view('onboard.utilities');
    }


    public function insurances()
    {

        return view('onboard.insurances');
    }


    public function memberships()
    {

        return view('onboard.memberships');
    }

    public function groceries()
    {

        return view('onboard.groceries');
    }

    public function gas()
    {

        return view('onboard.gas');

    }
    public function savings()
    {

        return view('onboard.savings');

    }



    public function store()
    {
        auth()->user()->publish(
            new MonthlyExpense(request([
                'type_id',

                'amount',

                'monthly_category_id'
            ]))
        );


        return redirect('/home');

    }

    public function storeSaving(Request $request)
    {
        $data = $request->all();


        $id = auth()->user()->id;

        $user = User::find($id);

//dd($user);
        $user->save_percent = $data['save_percent']/100;

        $user->save();

        return redirect('/home');
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
                return redirect('/onboard/groceries');
            break;

            case 7:
                return redirect('/onboard/gas');
            break;

            case 8:
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
//dd($array_of_expenses);
        $step = false;

        for ($i = 1; $i <= 7; $i++) {
            if (!isset($array_of_expenses[$i-1]) ||
                $array_of_expenses[$i-1]->monthly_category_id !== $i) {
                $step = $i;
                break;
            }
        }

        if (!$step && !auth()->user()->save_percent) {
            $step = 8;
        }

        return $step;

    }
}
