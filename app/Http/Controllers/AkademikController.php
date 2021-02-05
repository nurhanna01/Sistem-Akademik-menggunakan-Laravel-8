<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akademik;
use App\Models\Student;
use App\Models\Admin;
use App\Models\Lecture;
use Illuminate\Support\Facades\Hash;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('akademik.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function akademik()
    {
        $akademiks=Akademik::all();
        return view('akademik.akademik',compact('akademiks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('akademik.create');
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
            'username'=>'required',
            'nama'=>'required',
            'password'=>'required',
            'jenis_kelamin'=>'required',
            'alamat'=>'required'
        ]);

        Akademik::create($request->all());
        return redirect()->route('akademik.akademik')
                         ->with('success','Akademik created successfully.');
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
        Akademik::find($id)->delete();
 
        return redirect()->route('akademik.akademik')
                         ->with('success','Akademik deleted successfully');
    }

    public function scores()
    {
        $scores=Score::all();
        return view('akademik.scores',compact('scores'));
    }




    // **************************************************************************
    // pengolahan data student oleh bagian akademik
    public function students()
    {
        $students=Student::all();
        return view('akademik.students.students',compact('students'));
    }


    public function create_students()
    {
        
        return view('akademik.students.create_students');
        
    }

    public function store_students(Request $request)
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
        Student::create([
            'nim' => $request->nim,
            'password' => Hash::make($request->password),
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat
        ]);
        
        return redirect()->route('akademik.students')
                         ->with('success','Student created successfully.');
    }

    public function show_students($id)
    {
        $student = Student::find($id);
        return view('akademik.students.show_students',compact('student'));
    }

    public function edit_students($id)
    {
        $student = Student::find($id);
        return view('akademik.students.edit_students',compact('student'));
    }

    public function update_students(Request $request, $id)
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
        $student->jenis_kelamin=$request->jenis_kelamin;
        $student->jurusan=$request->jurusan;
        $student->angkatan=$request->angkatan;
        $student->alamat=$request->alamat;
        $student->save();
        return redirect()->route('akademik.students')
                         ->with('success','Student update successfully.');
    }

    public function destroy_students($id)
    {
        Student::find($id)->delete();
 
        return redirect()->route('akademik.students')
                         ->with('success','Student deleted successfully');
    }


    // ***************************************************************************


    // ##########################################################################


    // **************************************************************************
    // pengolahan data admin oleh bagian akademik

    public function admin()
    {
        $admins=Admin::all();
        return view('akademik.admin.admin',compact('admins'));
    }


    public function create_admin()
    {
        
        return view('akademik.admin.create_admin');
        
    }


    public function store_admin(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'jurusan'=>'required',
            'alamat'=>'required'
        ]);

        Admin::create($request->all());
        return redirect()->route('akademik.admin')
                         ->with('success','Admin created successfully.');
    }


    public function show_admin($id)
    {
        $admin = Admin::find($id);
        return view('akademik.admin.show_admin',compact('admin'));
    }

    public function edit_admin($id)
    {
        $admin = Admin::find($id);
        return view('akademik.admin.edit_admin',compact('admin'));
    }


    public function update_admin(Request $request, $id)
    {
        $request->validate([
            'username'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'jurusan'=>'required',
            'alamat'=>'required'
        ]);

        $admin=Admin::find($id);
        $admin->username=$request->username;
        $admin->nama=$request->nama;
        $admin->jenis_kelamin=$request->jenis_kelamin;
        $admin->jurusan=$request->jurusan;
        $admin->alamat=$request->alamat;
        $admin->save();
        return redirect()->route('akademik.admin')
                         ->with('success','Admin update successfully.');
    }

    public function destroy_admin($id)
    {
        Admin::find($id)->delete();
 
        return redirect()->route('akademik.admin')
                         ->with('success','Admin deleted successfully');
    }
    // *************************************************************************


    // ##########################################################################


    // **************************************************************************
    // pengolahan data lectures oleh bagian akademik

    public function lectures()
    {
        $lectures=Lecture::all();
        return view('akademik.lectures.lectures',compact('lectures'));
    }


    public function create_lectures()
    {
        
        return view('akademik.lectures.create_lectures');
        
    }


    public function store_lectures(Request $request)
    {
        $request->validate([
            'nip'=>'required',
            'password'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'alamat'=>'required'
        ]);

        Lecture::create($request->all());
        return redirect()->route('akademik.lectures')
                         ->with('success','Lectures created successfully.');
    }


    public function show_lectures($id)
    {
        $lecture = Lecture::find($id);
        return view('akademik.lectures.show_lectures',compact('lecture'));
    }

    public function edit_lectures($id)
    {
        $lecture = Lecture::find($id);
        return view('akademik.lectures.edit_lectures',compact('lecture'));
    }


    public function update_lectures(Request $request, $id)
    {
        $request->validate([
            'nip'=>'required',
            'nama'=>'required',
            'jenis_kelamin'=>'required',
            'alamat'=>'required'
        ]);

        $lecture=Lecture::find($id);
        $lecture->nip=$request->nip;
        $lecture->nama=$request->nama;
        $lecture->jenis_kelamin=$request->jenis_kelamin;
        $lecture->alamat=$request->alamat;
        $lecture->save();
        return redirect()->route('akademik.lectures')
                         ->with('success','Lecture update successfully.');
    }

    public function destroy_lectures($id)
    {
        Lecture::find($id)->delete();
 
        return redirect()->route('akademik.lectures')
                         ->with('success','Lecture deleted successfully');
    }
    // *************************************************************************

}
