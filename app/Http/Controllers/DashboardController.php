<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        if($step) {
            return OnBoardingController::onBoardTriager($step);
        }

        $monthly_expenses = DB::table('monthly_expenses')
            ->where('user_id', '=', auth()->user()->id)
            ->get();

        $daily_expenses = DB::table('daily_expenses')
            ->where('user_id', '=', auth()->user()->id)
            ->get();

        $income =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('type_id', '=' , 1)
                ->sum('amount');

        $expense =
            DB::table('monthly_expenses')
                ->where('user_id', '=', auth()->user()->id)
                ->where('type_id', '=' , 2)
                ->sum('amount');

        $daily_value =
            DB::table('daily_expenses')
                ->join('users', 'users.id', '=', 'daily_expenses.user_id')
                ->where('daily_expenses.user_id', '=', auth()->user()->id)
                ->whereRaw('daily_expenses.created_at >= users.reference_date')
                ->sum('amount');

        $monthly_sum = $income - $expense;

        $monthly_savings = auth()->user()->save_percent;

        $savings_sum = $monthly_sum * $monthly_savings;

        $monthly_total = $monthly_sum - $savings_sum;

        $weekly_total = ($monthly_total * 12 )/52;

        $weekly_amount = round($weekly_total - $daily_value);


        return view('home', compact('monthly_expenses', 'daily_expenses', 'weekly_amount', 'daily_value'));

    }
}
