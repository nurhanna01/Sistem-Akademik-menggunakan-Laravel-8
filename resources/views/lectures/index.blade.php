@extends("template")

@extends("sidebar_lecture")

@section('content')

<!-- Content Row -->
<div class="row">

<div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('lecture.mycourse') }}">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>Mata Kuliah</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Mata Kuliah Yang Saya Ajar</p>
        </div>
    </div>
    </a>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <a href="#">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>Nilai Mahasiswa</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Pengolahan Data Nilai Mahasiswa</p>
        </div>
    </div>
    </a>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('lecture.show') }}">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>Data Pribadi</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Data Pribadi Saya</p>
        </div>
    </div>
    </a>
</div>

</div>

@endsection