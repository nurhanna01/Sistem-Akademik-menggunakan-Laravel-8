@extends('template')

@extends("sidebar_akademik")
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>SIMAK</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('akademik.create') }}"> Tambah Data Akademik</a>
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
            <th width="20px" class="text-center">No</th>
            <th>Username</th>
            <th>Nama</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($akademiks as $akademik)
        <tr>
            <td class="text-center"></td>
            <td>{{ $akademik->username }}</td>
            <td>{{ $akademik->nama }}</td>
            <td class="text-center">
                <form action="{{ route('akademik.destroy',$akademik->id) }}" method="POST">
 
<!--                     <a class="btn btn-info btn-sm" href="{{ route('akademik.show',$akademik->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('akademik.edit',$akademik->id) }}">Edit</a> -->
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

 
@endsection