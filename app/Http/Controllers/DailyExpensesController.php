<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Daily;

class DailyExpensesController extends Controller
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
        $daily_expenses = Daily::all();

        return view('daily.home', compact('daily_expenses'));

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $this->validate($request, [

            'category_id' => 'required',

            'amount' => 'required'

        ]);


        $data = $request->all();

        $daily_expenses = new Daily;

        $daily_expenses->category_id = $data['category_id'];

        $daily_expenses->amount = $data['amount'];

        $daily_expenses->save();

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
        $daily_expenses = Daily::find($id);

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

            'category_id' => 'required',

            'amount' => 'required'

        ]);


        $data = $request->all();

        $daily_expenses = Daily::find($data['id']);
        $daily_expenses->amount = $data['amount'];
        $daily_expenses->category_id = $data['category_id'];

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

        $daily_expenses = Daily::find($id);
        $daily_expenses->delete();

        return "success";
    }
}



