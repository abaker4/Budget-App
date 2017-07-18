<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MonthlyExpense;
use App\DailyExpense;
use Illuminate\Support\Facades\DB;
use App\User;

class MonthlyExpensesController extends Controller
{

    protected $guarded = [];

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function createIncome()
    {
        $monthly_income = MonthlyExpense::all();

        return view('monthly.income', compact('monthly_income'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createExpense()
    {
        $monthly_expenses = MonthlyExpense::all();

        return view('monthly.expense', compact('monthly_expenses'));

    }


    public function createSaving()
    {
        $monthly_saving = MonthlyExpense::all();

        return view('monthly.saving', compact('monthly_saving'));
    }



    public function storeIncome()
    {

        auth()->user()->publish(
            new MonthlyExpense(request([
                'type_id',

                'amount',

                'monthly_category',

                'save_percent'

            ]))
        );



//        if(isset($data['type_id'])=== 1){
//            redirect('/monthlyexpenses/create_income');
//
//        } else if(isset( $data['type_id'])=== 2){
//            redirect('/monthlyexpenses/create_savings');
//        }

        return redirect('/monthlyexpenses/create_expense');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeExpense()
    {


    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('monthly.details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monthly_expenses = MonthlyExpense::find($id);

        return view('monthly.edit', compact('monthly_expenses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate(request(), [

            'amount' => 'required',

            'title' => 'required'


        ]);


        $data = $request->all();

        $monthly_expenses = MonthlyExpense::find($data['id']);

        $monthly_expenses->amount = $data['amount'];
        $monthly_expenses->title = $data['title'];


        $monthly_expenses->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $monthly_expenses = MonthlyExpense::find($id);
        $monthly_expenses->delete();

        return "success";
    }
}
