@extends("template")

@extends("sidebar_admin")

@section('content')

<!-- Content Row -->
<div class="row">

<!-- Admin Menus -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href="{{ route('admin.courses') }}">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>Courses</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Pengolahan Data Courses</p>
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
            <p>Lihat Data Mahasiswa</p>
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
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>Data Admin</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            <p>Profil Admin/p>
        </div>
    </div>
    </a>
</div>


</div>

@endsection