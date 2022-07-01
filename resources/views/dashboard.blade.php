@extends('layouts.navbar')
@section('content')
        <div class="container-fluid">
             <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Pengendalian Karir</h1>
            </div>
            <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Promosi</div>
                                        
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$promosi}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-ad"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body"> 
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Disiplin Pegawai</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$disiplin}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-address-card"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tanda Penghargaan
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$penghargaan}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-award"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Penilaian Prestasi</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$prestasi}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-trophy"></i> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Kesejahteraan Pegawai</h1>
            </div>
            <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Kesehatan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kesehatan}}</div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fas fa-user-md"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body"> 
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Cuti</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$cuti}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-retweet"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tunjangan
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$tunjangan}}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-coins"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Pensiun</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pensiun}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Manajemen User</h1>
            </div>
            <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Jumlah User</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    

                    <!-- Earnings (Monthly) Card Example -->
                   

                    <!-- Pending Requests Card Example -->
                    
                </div>
        </div>

        
@endsection