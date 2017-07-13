<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DailyExpense;

class DailyExpensesController extends Controller
{
    protected $guarded = [];


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
        $daily_expenses = DailyExpense::all();


        return view('daily.create', compact('daily_expenses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daily.create');
    }


    public function dailyAmount()
    {

        // monthly_amount / days of the month = daily_amount
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeExpense()
    {

            auth()->user()->record(

            new DailyExpense(request([
                'daily_category',

                'amount'

            ]))
        );


        return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('daily.details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daily_expenses = DailyExpense::find($id);

        return view('daily.edit', compact('daily_expenses'));
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

            'daily_category' => 'required',

            'amount' => 'required'

        ]);


        $data = $request->all();

        $daily_expenses = DailyExpense::find($data['id']);
        $daily_expenses->amount = $data['amount'];
        $daily_expenses->daily_category = $data['daily_category'];

        $daily_expenses->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $daily_expenses = DailyExpense::find($id);
        $daily_expenses->delete();

        return "success";
    }
}



