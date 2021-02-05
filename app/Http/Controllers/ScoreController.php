<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores=Score::all();
        return view('scores.index',compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim'=>'required',
            'kode_mk'=>'required',
            'nip'=>'required',
            'nilai'=>'required'
        ]);

        Score::create($request->all());
        return redirect()->route('scores.index')->with('succes','Scores create successfully');
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
        $score=Score::find($id);
        return view('scores.edit',compact('score'));
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
        $request->validate([
            'nim'=>'required',
            'kode_mk'=>'required',
            'nip'=>'required',
            'nilai'=>'required'
        ]);

        $score=Score::find($id);
        $score->nim=$request->nim;
        $score->kode_mk=$request->kode_mk;
        $score->nip=$request->nip;
        $score->nilai=$request->nilai;
        $score->save();
        return redirect()->route('scores.index')->with('succes','Scores update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $score=Score::find($id)->delete();
        return redirect()->route('scores.index')->with('succes','Scores delete successfully');
    
    }
}
