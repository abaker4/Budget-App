<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DailyExpense;
use App\User;

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

        $daily = DailyExpense::all();

        return View::make('home')
            ->with('categories', $daily->lists('daily_category_id'))
            ->with('totals', $daily->lists('amount'));

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




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {

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



