@extends('layouts.navbar')
@section('content')
        <!-- Page Wrapper -->
        
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <form action="{{ route('tambahprestasi') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Penilaian Prestasi</h1>
                        @if($role == '1' || $role == '3' || $role == '2' || $role == '4')

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Tambah Data </button>
                        @endif
                    </div>

                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date</label>
                                                <div class="input-group date" id="datepicker">
                                                    <input type="date" name="date" class="form-control">
                                                    <span class="input-group-append">
                                                        <span class="input-group-text bg-white d-block">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">Nama File</label>
                                                <input type="text" name="namafile" class="form-control" id="formGroupExampleInput2" placeholder="masukkan nama">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">Kode</label>
                                                <input type="text" name="kode" class="form-control" id="formGroupExampleInput2" placeholder="masukkan kode">
                                            </div>
                                            <div class="mb-3">
                                                <label for="file" class="form-label">Upload File</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file" name="file">
                                                    <label class="custom-file-label" for="file">Choose file</label>
                                                    @error('file')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/penilaianprestasi"><button type="button" class="btn btn-secondary" data-toggle="modal">Close</button></a>
                                            <input type="submit" class="btn btn-primary" value="Save">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tambah Data -->
                    <form method="get" action="{{ route('penilaianprestasi') }}" class="p-2 d-none d-sm-inline-block form-inline mr-auto ml-md-0 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input class="form-control bg-light border-secondary small" id="myInput" type="text" placeholder="Search..">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                        <th>Tanggal</th>
                                            <th>Nama File</th>
                                            <th>Kode</th>
                                            <th>File</th>
                                            @if($role == '1' || $role == '3' || $role == '5')
                                            <th>Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <?php $no=1; ?>
                                        @foreach($prestasi as $value)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $value->date }}</td>
                                            <td>{{ $value->namafile }}</td>
                                            <td>{{ $value->kode }}</td>
                                            <td>
                                                <a href="dokumen/{{$value->file}}"><button class="btn btn-success" type="button">Preview</button></a>
                                            </td>
                                            @if($role == '1' || $role == '3' || $role == '5')
                                            <td>
                                                <a href="#/tampilprestasi/{{ $value->id }}" title="Edit"><button class="btn btn-primary btn data-target="#edit{{$value->id}}" type="button" data-toggle="modal"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                    <div class="modal fade" id="edit{{$value->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">{{ __('Edit Data') }}</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/updateprestasi/{{ $value->id }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row d-flex justify-content-center">
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                            <label for="date" class="form-label">Date</label>
                                                                            <div class="input-group date" id="datepicker">
                                                                                <input type="date" name="date" class="form-control" value="{{ $value->date }}">
                                                                                <span class="input-group-append">
                                                                                            <span class="input-group-text bg-white d-block">
                                                                                                <i class="fa fa-calendar"></i>
                                                                                            </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formGroupExampleInput2" class="form-label">Nama File</label>
                                                                            <input type="text" name="namafile" class="form-control" id="formGroupExampleInput2" placeholder="masukkan nama" value="{{ $value->namafile }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="formGroupExampleInput2" class="form-label">Kode</label>
                                                                            <input type="text" name="kode" class="form-control" id="formGroupExampleInput2" placeholder="masukkan kode" value="{{ $value->kode }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="file" class="form-label">Upload File</label>
                                                                            <div class="custom-file">
                                                                                <input type="file" class="custom-file-input" id="file" name="file">
                                                                                <label class="custom-file-label" for="file">Choose file</label>
                                                                                @error('file')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="/penilaianprestasi"><button type="button" class="btn btn-secondary" data-toggle="modal">Close</button></a>
                                                                        <input type="submit" class="btn btn-primary" value="Save">
                                                                    </div>
                                                                </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- </form> -->
                                                    </div>
                                                    </div>
                                                    <a href="/deleteprestasi/{{ $value->id }}" class="btn btn-danger btn">Delete</a>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; PT. Unilover.Tbk 2022</span>
                            </div>
                        </div>
                    </footer>

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js">
            </script>
            <script type="text/javascript">
                $(function() {
                    $('#datepicker').datepicker();
                });
            </script>
@endsection