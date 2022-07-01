@extends('layouts.navbar')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manajemen User</h1>
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
                                </div>
                                <form action="{{ route('tambahuser') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" id="formGroupExampleInput2" placeholder="masukkan nama" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" id="formGroupExampleInput2" placeholder="masukkan Username" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">email</label>
                                                <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="masukkan email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">nim</label>
                                                <input type="text" name="nim" class="form-control" id="formGroupExampleInput2" placeholder="masukkan nim" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">password</label>
                                                <input type="text" name="password" class="form-control" id="formGroupExampleInput2" placeholder="masukkan password" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputState">Role</label>
                                                <select id="inputState" name="role" class="form-control">
                                                  <option value="1" selected>Admin 1</option>
                                                  <option value="2">Admin 2</option>
                                                  <option value="3">Admin 3</option>
                                                  <option value="4">Admin 4</option>
                                                  <option value="5">Admin 5</option>
                                                  <option value="6">Admin 6</option>
                                                </select>
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/manajemenuser"><button type="button" class="btn btn-secondary" data-toggle="modal">Close</button></a>
                                            <input type="submit" value="Save Changes" class="btn btn-primary">
                                        </div> 
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>

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
                                            <th>User</th>
                                            <th>Role</th>
                                            @if($role == '1' || $role == '3' || $role == '5')
                                            <th>Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                        @foreach($data as $x)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $x->username }}</td>
                                            <td>{{ $x->role }}</td>
                                            @if($role == '1' || $role == '3' || $role == '5')
                                            <td>
                                                <a href="#/manajemenuser/{{ $x->id }}" title="Edit"><button class="btn btn-primary btn" data-target="#edit{{$x->id}}" type="button" data-toggle="modal"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                <!-- Modal -->
                                                <!-- Tombol Delete -->
                                                <a href="/deleteuser/{{ $x->id }}" class="btn btn-danger btn">Delete</a>
                                            </td>
                                            @endif
                                        </tr>
                                        <div class="modal fade" id="edit{{$x->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">{{ __('Edit Data') }}</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/updateuser/{{ $x->id }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row d-flex justify-content-center">
                                                                    <div class="col-12">
                                                                        <div class="mb-3">
                                                                        <label for="formGroupExampleInput2" class="form-label">Name</label>
                                                                        <input type="text" value="{{ $x->name }}" class="form-control" name="name" id="formGroupExampleInput2" placeholder="masukkan Username">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formGroupExampleInput2" class="form-label">Username</label>
                                                                        <input type="text" value="{{ $x->username }}" class="form-control" name="username" id="formGroupExampleInput2" placeholder="masukkan Username">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formGroupExampleInput2" class="form-label">email</label>
                                                                        <input type="text" value="{{ $x->email }}" name="email" class="form-control" id="formGroupExampleInput2" placeholder="masukkan email">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="formGroupExampleInput2" class="form-label">password</label>
                                                                        <input type="text" name="password" class="form-control" id="formGroupExampleInput2" placeholder="masukkan password" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="/manajemenuser"><button type="button" class="btn btn-secondary" data-toggle="modal">Close</button></a>
                                                                        <input type="submit" class="btn btn-primary" value="Save">
                                                                    </div>
                                                                </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- </form> -->
                                                    </div>
                                                    <!-- /.container-fluid -->
                                                </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; PT. Unilever.Tbk 2022</span>
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

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
@endsection