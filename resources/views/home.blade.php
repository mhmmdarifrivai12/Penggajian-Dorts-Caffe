@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body bg-info">
                            <p class="card-text">
                                {{ __('Selamat Datang !') }} {{ auth()->user()->nama }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @if(auth()->user()->is_admin)
    <div class="row justify-content-center">

      <div class="col-lg-3 col-6 ">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>150</h3>
            <p>Jabatan</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">
            Tambah Jabatan <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>150</h3>
            <p>Jumlah Karyawan</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">
            Tambah Karyawan <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
    @endif

    
    


@endsection