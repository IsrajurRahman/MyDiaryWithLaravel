<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Number;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = \Auth::user()->id;
        $numbers = DB::table('numbers')->where('user_id', $userID)->orderBy('id', 'DESC')->get();
        return view('numbers.numbers',compact('numbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('numbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $number = new \App\Number;
        $number->user_id = \Auth::user()->id;
        $number->name = $request->get('name');
        $number->number = $request->get('number');
        $number->email = $request->get('email');
        $number->address = $request->get('address');
        $number->save();

        return redirect('/numbers')->with('success', 'Number has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $number = Number::find($id);

        return view('numbers.edit', compact('number'));
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
        $number = Number::find($id);
        $number->user_id = \Auth::user()->id;
        $number->name = $request->get('name');
        $number->number = $request->get('number');
        $number->email = $request->get('email');
        $number->address = $request->get('address');
        $number->save();
        
        return redirect('/numbers')->with('success', 'Number Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $number = Number::find($id);
        $number->delete();

        return redirect('/numbers')->with('success', 'Number Deleted Successfully');
    }

    public static function total_number()
    {
        $userID = \Auth::user()->id;
        $numberList = DB::table('numbers')->where('user_id', $userID)->count();
        return $numberList;

    }
}
