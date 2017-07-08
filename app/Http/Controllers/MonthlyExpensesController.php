<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monthly;

class MonthlyExpensesController extends Controller
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
        $monthly_events = Monthly::all();

            return view('monthly.home', compact('monthly_events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monthly.create');
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

            'type_id' => 'required',

            'amount' => 'required',

            'title' => 'required'

        ]);


        $data = $request->all();

        $monthly_expenses = new Monthly;

        $monthly_expenses->amount = $data['amount'];

        $monthly_expenses->title = $data['title'];

        $monthly_expenses->save();

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
        $monthly_expenses = Monthly::find($id);

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

        $monthly_expenses = Monthly::find($data['id']);

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

        $monthly_expenses = Monthly::find($id);
        $monthly_expenses->delete();

        return "success";
    }
}
