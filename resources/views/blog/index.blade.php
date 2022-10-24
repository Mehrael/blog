@include('blog.shared.header')
<!-- Page header with logo and tagline-->
<header class="py-3 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-9">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="\img\Blog post-amico.svg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">October 17, 2022</div>
                    <h2 class="card-title">My Blog Project</h2>
                    <a class="btn btn-primary" href="/post/3">Read more →</a>
                </div>
            </div>


        </div>
        <!-- Side widgets-->
        <div class="col-lg-2">
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <ul class="list-unstyled mb-0">

                                @foreach ($categories as $c)
                                    <li><a href="/postsInCat/{{$c->id}}">{{ $c->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@include('blog.shared.script')
