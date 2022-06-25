@extends('layouts.navbar')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manajemen User</h1>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Tambah Data </button>
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
                                                <label for="formGroupExampleInput2" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="masukkan Username">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">email</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="masukkan email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label">password</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="masukkan password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputState">Role</label>
                                                <select id="inputState" class="form-control">
                                                  <option selected>1</option>
                                                  <option>2</option>
                                                  <option>3</option>
                                                  <option>4</option>
                                                </select>
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jonas Alexander</td>
                                            <td>Developer</td>
                                            <td>
                                                <a href="#" title="Edit"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Shad Decker</td>
                                            <td>Regional Director</td>
                                            <td>
                                                <a href="#" title="Edit"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>
                                                <a href="#" title="Edit"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>
                                                <a href="#" title="Edit"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; PT. Unilever.Tbk 20221</span>
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