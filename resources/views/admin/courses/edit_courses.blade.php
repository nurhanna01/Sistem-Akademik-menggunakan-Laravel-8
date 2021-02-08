@extends('template')
 
@extends("sidebar_admin")

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Course</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('admin.courses') }}"> Back</a>
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
 
    <form action="{{ route('admin.update_courses',$course->id) }}" method="POST">
        @csrf
        @method('PUT')
 
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode MK:</strong>
                <input type="text" name="kode_mk" class="form-control" placeholder="Kode Mata Kuliah" value="{{ $course->kode_mk }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mata Kuliah:</strong>
                <input type="text" name="nama_mk" class="form-control" placeholder="Nama Mata Kuliah" value="{{ $course->nama_mk }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SKS:</strong>
                <input type="text" name="jumlah_sks" class="form-control" placeholder="Jumlah SKS" value="{{ $course->jumlah_sks }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dosen Pengajar:</strong>
                    <select name="lecture_id" id="lecture" class="form-control">
                        <option value="">== Select Lecture ==</option>
                        @foreach ($lectures as $lecture)
                            <option value="{{ $lecture->id }}" {{ $lecture->id == $course->lecture_id ? 'selected' : '' }}>{{ $lecture->nama }}</option>
                        @endforeach
                    </select>
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>
@endsection