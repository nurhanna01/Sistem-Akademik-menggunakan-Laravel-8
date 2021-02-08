@extends('template')

@extends("sidebar_student")
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tambah Data SKS</h2>
            </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('student.course_student',1) }}"> Back</a>
        </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <form action="{{ route('student.store_course_student') }}" method="POST" >
    @csrf
        <table class="table table-bordered">
            <tr>
                <th class="text-center">kode_mk</th>
                <th class="text-center">Nama MK</th>
                <th class="text-center">SKS</th>
                <th class="text-center">Dosen Pengajar</th>
                <th width="40px"class="text-center">Pilih MK</th>
            </tr>
            @foreach ($courses as $course)
            <tr>
                <td class="text-center">{{ $course->kode_mk }}</td>
                <td class="text-center">{{ $course->nama_mk }}</td>
                <td class="text-center">{{ $course->jumlah_sks }}</td>
                <td class="text-center">{{ $course->lecture->nama }}</td>
                <td class="text-center">
                <input type="checkbox" name="course_id[]" value="{{ $course->id }}">
                <input type="hidden" name="nama_mk" value="{{ $course->nama_mk }}">
                </td>
            </tr>
            @endforeach
        </table>
                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                    <input type="submit" class="btn btn-primary" value="tambahkan">
                </div>
        </form>

 
@endsection