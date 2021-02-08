@extends('template')
 
@extends("sidebar_lecture")
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>SIMAK</h2>
            </div>
        </div>
    </div>
    <div class="float-right">
        <a class="btn btn-secondary" href="{{ route('lecture') }}"> Back</a>
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
            <th class="text-center">Jumlah sks</th>
        </tr>
        @foreach ($lecture->courses as $course)
            <tr>
                <td class="text-center">{{ $course->kode_mk }}</td>
                <td class="text-center">{{ $course->nama_mk }}</td>
                <td class="text-center">{{ $course->jumlah_sks }}</td>
            </tr>
        @endforeach
    </table>

 
@endsection