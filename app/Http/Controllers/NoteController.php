<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID= \Auth::user()->id;
        $notes= DB::table('notes')->where('user_id', $userID)->orderBy('id', 'DESC')->get();
        return view('notes.notes',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new \App\Note;
        $note->user_id = \Auth::user()->id;
        $note->title = $request->get('title');
        $note->description = $request->get('description');
        $note->save();

        return redirect('/notes')->with('success', 'Note has been added');
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
        $note = Note::find($id);

        return view('notes.edit', compact('note'));
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
        $note = Note::find($id);
        $note->user_id = \Auth::user()->id;
        $note->title = $request->get('title');
        $note->description = $request->get('description');
        $note->save();
        
       return redirect('/notes')->with('success', 'Note has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     $note = Note::find($id);
     $note->delete();

     return redirect('/notes')->with('success', 'Note has been deleted Successfully');

    }

    public static function total_notes()
    {
        $userID = \Auth::user()->id;
        $noteList = DB::table('notes')->where('user_id', $userID)->count();
        return $noteList;

    }
}
