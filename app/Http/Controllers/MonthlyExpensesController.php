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
