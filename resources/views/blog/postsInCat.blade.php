@include('blog.shared.header')

<br><br>

<div class="container">
    <div class="row row-cols-2">
        <!-- Blog entries-->
        <div class="col-lg-10">
            @if (count($article) < 1)
                <div class="container">
                    <img class="card-img-top" src="\img\No data-pana.svg" />
                    <div class="text-center my-5">
                        <h2 class="fw-bolder">
                            No Articles in this Category
                        </h2>
                    </div>
                </div>
            @endif
            <div class="row row-cols-3">
                @foreach ($article as $a)
                    <!-- Blog post-->
                    <div class="col col-sm-6">
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{ $a->img }}" />
                            <div class="card-body">
                                <div class="small text-muted">Posted at {{ $a->created_at }}</div>
                                <h2 class="card-title h4">{{ $a->title }}</h2>

                                <a class="btn btn-primary" href="/post/{{ $a->id }}">Read more →</a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                                    <li><a href="/postsInCat/{{ $c->id }}">{{ $c->name }}</a></li>
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
