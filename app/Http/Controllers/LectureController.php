<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lectures=Lecture::all();
        return view('lectures.index',compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lectures.create');
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
            'nip'=>'required',
            'nama_dosen'=>'required',
            'jenis_kelamin_dosen'=>'required',
            'alamat_dosen'=>'required'
        ]);

        Lecture::create($request->all());
        return redirect()->route('lectures.index')->with('succec','Lecture created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lecture=Lecture::find($id);
        return view('lectures.show',compact('lecture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecture=Lecture::find($id);
        return view('lectures.edit',compact('lecture'));
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
            'nip'=>'required',
            'nama_dosen'=>'required',
            'jenis_kelamin_dosen'=>'required',
            'alamat_dosen'=>'required'
        ]);

        $lecture=Lecture::find($id);
        $lecture->nip=$request->nip;
        $lecture->nama_dosen=$request->nama_dosen;
        $lecture->jenis_kelamin_dosen=$request->jenis_kelamin_dosen;
        $lecture->alamat_dosen=$request->alamat_dosen;
        $lecture->save();

        return redirect()->route('lectures.index')->with('Lecture update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecture=Lecture::find($id)->delete();
        return redirect()->route('lectures.index')->with('Lecture delete successfully');
    }
}
