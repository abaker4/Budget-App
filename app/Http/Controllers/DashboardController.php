<?php

namespace App\Http\Controllers;


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
            ->where('user_id', '=', auth()->user()->id)
            ->select('daily_expenses.*')
            ->get();


        $daily_title = DailyExpense::join('daily_category', 'daily_category.id', 'daily_expenses.daily_category_id')
            ->where('user_id', '=', auth()->user()->id)
            ->select('daily_expenses.*', 'daily_category.title')
            ->get();

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
                ->where('user_id', '=', auth()->user()->id)
                ->sum('amount');


        $monthly_sum = $income - $expense;

        $monthly_savings = auth()->user()->save_percent;

        $savings_sum = $monthly_sum * $monthly_savings;

        $monthly_total = $monthly_sum - $savings_sum;

        $weekly_total = ($monthly_total * 12) / 52;

        //@todo change this to use the reference date and multiply the weekly total by number of days
        // since that date and then only subtract expenses since that date
        $weekly_amount = round($weekly_total - $daily_value);


        return view('home', compact('monthly_expenses', 'daily_expenses','daily_title', 'weekly_amount', 'daily_value', 'monthly_category'));




    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dailyTotal()
    {


        auth()->user()->record(

            new DailyExpense(request([

                'daily_category_id',

                'amount'

            ]))
        );

        return redirect('/home');
    }






}