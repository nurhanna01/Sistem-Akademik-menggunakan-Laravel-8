@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>SIMAK</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('scores.create') }}"> Add Score</a>
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
            <th>NIm</th>
            <th>Kode MK</th>
            <th>Nilai</th>
            <th>Nip</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($scores as $score)
        <tr>
            <td class="text-center"></td>
            <td>{{ $score->nim }}</td>
            <td>{{ $score->kode_mk }}</td>
            <td>{{ $score->nilai }}</td>
            <td>{{ $score->nip }}</td>
            <td class="text-center">
                <form action="{{ route('scores.destroy',$score->id) }}" method="POST">

 
                    <a class="btn btn-primary btn-sm" href="{{ route('scores.edit',$score->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

 
@endsection