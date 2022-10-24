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
                    <h1 class="h3 mb-4 text-gray-800">Add Article</h1>
                    <div class="row">
                        <!-- New Category -->
                        <div class="col-xl-5 col-lg-5">
                            {{-- Add New Article Card --}}
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Adding a new category</h6>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ url('storeArticle') }}" enctype="multipart/form-data"
                                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Title" name="title">
                                        </div>
                                        <br>
                                        <div class="input-group ">
                                            <input type="file" class="form-control bg-light border-0 small "
                                                name="img" id="img">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <textarea class="form-control bg-light border-0 " placeholder="Description" required name="description"></textarea>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <select class="custom-select form-control bg-light border-0 small"
                                                id="validationTooltip04" required name="category">
                                                <option selected disabled value="">Select Category</option>
                                                @foreach ($categories as $c)
                                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>

                                        <input type="submit" value="Add To Articles"
                                            class="btn btn-success btn-icon-split"
                                            style="height: 40px; width:200px">

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7 col-lg-7">
                            <!-- GIF -->
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 40rem;"
                                    src="img/9408-creative-process.gif" alt="...">
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
    
    @include('admin.general.scripts')
