@include('admin.general.header')

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('admin.layout.sidebar')
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
                                <!-- Single comment-->
                                <div class="d-flex">
                                    @php
                                        $counter = 0;
                                    @endphp
                                    @foreach ($comments as $c)
                                        @if ($article->id == $c->article_id)
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle" src="/img/Chat.jpg"
                                                    style="height: 40px;width:40px">
                                            </div>
                                </div>
                                <div class="ms-3">
                                    <div class="fw-bold">{{ $c->commenter_name }}</div>
                                    {{ $c->content }}
                                </div>
                                @php
                                    $counter++;
                                @endphp
                                @endif
                                @endforeach
                                @if ($counter == 0)
                                    No Comments Yet
                                @endif
                            </div>
                            <br>
                        </div>
                </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('admin.general.scripts')
