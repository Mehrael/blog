@include('admin.general.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.layout.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.layout.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Category</h1>

                    <div class="row">
                        <!-- New Category -->
                        <div class="col-xl-4 col-lg-5">
                            {{-- Add New Category Card --}}
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Adding a new category</h6>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ url('storeCategory') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                       @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                name="name" placeholder="Category name...">
                                        </div>
                                        <br>
                                  
                                            <input type="submit" value="Add To Categories" class="btn btn-success btn-icon-split btn-block" style="height: 40px">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1"></div>
                        <div class="col-xl-6 col-lg-7">
                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <!-- GIF -->
                                <div class="text-center">
                                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                        src="img/113085-growth-progress-3d.gif" alt="...">
                                </div>
                                <div class="card-body">

                                    <hr>
                                    More people will view your blog when you add interesting categories.
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    @include('admin.general.scripts')