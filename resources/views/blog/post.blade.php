@include('blog.shared.header')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $article->title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted at {{ $article->created_at }}</div>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4">
                    <img class="img-fluid rounded" src="{{ $article->img }}">
                </figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4">{!! nl2br(e($article->description)) !!}</p>
                </section>
            </article>
            <!-- Comments section-->
            <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <!-- Comment form-->
                        <form class="mb-4" method="POST" action="{{ url('saveComment') }}">
                            @csrf

                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <input class="form-control" type="text" placeholder="Name" style="width: 200px"
                                name="commenter_name">

                            <br>
                            <textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!" name="content"></textarea>
                            <br>
                            <input type="submit" value="Send" class="btn btn-success btn-block" style="height: 40px">
                        </form>

                        <!-- Comments -->

                        @if (count($comments) < 1)
                            No Comments Yet
                        @endif

                        @foreach ($comments as $c)
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img class="rounded-circle" src="/img/Chat.jpg" style="height: 40px;width:40px" />
                                </div>
                                <div class="ms-3" style="max-width: 700px">
                                    <div class="fw-bold">{{ $c->commenter_name }}</div>
                                    <p>{!! nl2br(e($c->content)) !!}</p>
                                </div>

                            </div>
                            <br>
                        @endforeach


                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-2"></div>
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
