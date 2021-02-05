@extends('template')
 
@extends("sidebar_student")
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>SIMAK</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('student.create_course_student',1) }}"> Add Course/SKS</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th class="text-center">Kode Mk</th>
            <th class="text-center">Nama MK</th>
            <th width="180px" class="text-center">Action</th>
        </tr>
        @foreach ($mystudent->courses as $course)
            <tr>
                <td class="text-center">{{ $course->kode_mk }}</td>
                <td class="text-center">{{ $course->nama_mk }}</td>
                <td class="text-center">
                    <form action="{{ route('student.destroy_course_student',$course->id) }}" method="POST">
     
                        @csrf
                        @method('DELETE')
     
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

 
@endsection