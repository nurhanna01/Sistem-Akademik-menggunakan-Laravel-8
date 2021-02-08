<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Support\Facades\Hash;
use Auth;

class StudentController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::id();
        $student = Student::find($id);
        return view('students.index',compact('student'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id=Auth::id();
        $student = Student::find($id);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id=Auth::id();
        $student = Student::find($id);
        return view('students.edit',compact('student'));
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
            'password'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'jurusan'=>'required',
            'angkatan'=>'required',
            'alamat'=>'required'
        ]);

        $student=Student::find($id);
        $student->nim=$request->nim;
        $student->nama=$request->nama;
        $student->password=Hash::make($request->password);
        $student->jenis_kelamin=$request->jenis_kelamin;
        $student->jurusan=$request->jurusan;
        $student->angkatan=$request->angkatan;
        $student->alamat=$request->alamat;
        $student->save();
        return redirect()->route('student.show',1)
                         ->with('success','Student update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
 
        return redirect()->route('students.index')
                         ->with('success','Student deleted successfully');
    }


    public function course_student()
    {
        $id=Auth::id();
        $mystudent=Student::find($id);
 
        return view('students.course_student',compact('mystudent'));
    }

    public function create_course_student()
    {
        $courses=Course::all();
        return view('students.create_course_student',compact('courses'));
    }

    public function store_course_student(Request $request)
    {
        $id=Auth::id();
        $student=Student::find($id);

        $course_ids = $request->input('course_id');
        foreach($course_ids as $course_id){
            $student->courses()->attach($course_id);
        }
        return redirect()->route('student.course_student',1)
                         ->with('success','SKS added successfully.');
    }

    public function destroy_course_student($id)
    {
        $student_id=Auth::id();
        $student=Student::find($student_id);
        $student->courses()->detach($id);
 
        return redirect()->route('student.course_student',1)
                         ->with('success','SKS deleted successfully');
    }
}
