<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Lecture;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // *************************************************************************


    // ##########################################################################


    // **************************************************************************
    // pengolahan data course oleh admin

    public function courses()
    {
        $courses=Course::all();
        

        return view('admin.courses.courses',compact('courses'));
    }

    public function create_courses()
    {
        $lectures=Lecture::all();
        return view('admin.courses.create_courses',compact('lectures'));
        
    }

    public function store_courses(Request $request)
    {
        $request->validate([
            'kode_mk'=>'required',
            'nama_mk'=>'required',
            'jumlah_sks'=>'required',
            'lecture_id'=>'required'
        ]);

        Course::create($request->all());
        return redirect()->route('admin.courses')
                         ->with('success','Course created successfully.');
    }

    public function edit_courses($id)
    {
        $course = Course::find($id);
        $lectures=Lecture::all();

        return view('admin.courses.edit_courses',compact(['course','lectures']));
    }


    public function update_courses(Request $request, $id)
    {
        $request->validate([
            'kode_mk'=>'required',
            'nama_mk'=>'required',
            'jumlah_sks'=>'required',
            'lecture_id'=>'required'
        ]);

        $course=Course::find($id);
        $course->kode_mk=$request->kode_mk;
        $course->nama_mk=$request->nama_mk;
        $course->jumlah_sks=$request->jumlah_sks;
        $course->lecture_id=$request->lecture_id;

        $course->save();
        return redirect()->route('admin.courses')
                         ->with('success','Course update successfully.');
    }

    public function destroy_courses($id)
    {
        Course::find($id)->delete();
 
        return redirect()->route('admin.courses')
                         ->with('success','Course deleted successfully');
    }

    // ******************************************************************

}
