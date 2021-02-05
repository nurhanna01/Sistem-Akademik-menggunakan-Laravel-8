@extends('template')

@extends("sidebar_akademik")
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Admin</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('akademik.admin') }}"> Back</a>
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
 
    <form action="{{ route('akademik.update_admin',$admin->id) }}" method="POST">
        @csrf
        @method('PUT')
 
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                <input type="text" name="username" class="form-control" value="{{ $admin->username }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" value="{{ $admin->nama }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <select name="jenis_kelamin" class="form-control">
                    <option disabled selected>Pilih Jenis Kelamin</option>
                    <option value="perempuan" {{ $admin->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                    <option value="laki-laki" {{ $admin->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan:</strong>
                <select name="jurusan" class="form-control">
                    <option disabled selected>Pilih Jurusan</option>
                    <option value="sistem informasi" {{ $admin->jurusan == 'sistem informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                    <option value="teknik informatika" {{ $admin->jurusan == 'teknik informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                    <option value="teknik komputer" {{ $admin->jurusan == 'teknik komputer' ? 'selected' : '' }}>Teknik Komputer</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:150px" name="alamat">{{ $admin->alamat }}</textarea>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>
@endsection