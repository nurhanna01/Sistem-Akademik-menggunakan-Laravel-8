@extends("template")

@extends("sidebar_akademik")

@section('content')

<!-- Content Row -->
<div class="row">

<!-- Admin Menus -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('akademik.admin') }}">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>Admin</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Pengolahan Data Admin</p>
        </div>
    </div>
    </a>
</div>

<!-- Lectures Menu -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('akademik.lectures') }}">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>Lectures</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Pengolahan Data Lectures</p>
        </div>
    </div>
    </a>
</div>

<!-- Students Menu -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('akademik.students') }}">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>Students</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Pengolahan Data Students</p>
        </div>
    </div>
    </a>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('akademik.students') }}">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Nilai Mahasiswa</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Transkip Nilai Mahasiswa</p>
        </div>
    </div>
    </a>
</div>

</div>

@endsection