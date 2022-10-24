@include('admin.general.header')

<body>
    <br><br><br><br><br>
    <!-- Main Content -->
    <div id="content" class=" d-flex justify-content-center align-self-center">
        <!-- Begin Page Content -->
        <div class="container-fluid  d-flex justify-content-center align-self-center">
            <!-- 404 Error Text -->
            <div class="text-center">
                <div class="error mx-auto" data-text="404">404</div>
                <p class="lead text-gray-800 mb-5">Page Not Found</p>
                <p class="text-gray-500 mb-0">You are not allowed to open this page </p>
                <a href="{{ url('login') }}">&larr; Back to Login</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@include('admin.general.scripts')
