@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Course</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('courses.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('courses.update',$course->id) }}" method="POST">
        @csrf
        @method('PUT')
 
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Mata Kuliah:</strong>
                <input type="text" name="kode_mk" class="form-control" placeholder="kode mata kuliah" value="{{ $course->kode_mk }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mata Kuliah:</strong>
                <input type="text" name="nama_mk" class="form-control" placeholder="Nama mata kuliah" value="{{ $course->nama_mk }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah SKS:</strong>
                <input type="text" name="jumlah_sks" class="form-control" placeholder="Jumlah SKS" value="{{ $course->jumlah_sks }}">
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
 
    </form>
@endsection