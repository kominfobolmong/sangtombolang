<!DOCTYPE html>
<html lang="en">

<head>
    @include('bolmongkab.layout.head')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        @include('bolmongkab.layout.header')

    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="{{ ('/') }}">Home</a></li>
                        <li>Pengumuman Detail</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= pengumumandetail detail Section ======= -->
        <section id="pengumumandetail" class="pengumumandetail">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-detail entry animate__animated animate__flipInX animate_faster">
                            <h2 class="entry-title">
                                {{ $posts->title }}
                            </h2>

                            <div class="entry-meta">
                                <ul style="margin-bottom : 1%">
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="#">{{ $posts->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="#"><time
                                                datetime="{{ $posts->created_at }}">{{ $posts->created_at }}</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-detail">
                                <p>
                                    {!! nl2br(e($posts->content)) !!}

                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Lampiran
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <iframe src="{{ $posts->embed }}" frameBorder="0" scrolling="auto"
                                                        height="400px" width="100%"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="{{ route('cari-kategori', $posts->category->id) }}">{{ $posts->category->name }}</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    @foreach ($posts->tags as $tag)
                                    <li><a href="{{ route('cari-tag', $tag->id) }}">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>

                        </article><!-- End pengumumandetail entry -->

                    </div><!-- End pengumumandetail entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">
                            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_qmfs6c3i.json"
                                background="transparent" speed="1" style="width: 250px; height: 250px; margin: auto;"
                                loop autoplay></lottie-player>
                            <h3 class="sidebar-title">Cari</h3>
                            <div class="sidebar-item search-form">
                                <form action="{{ ('/pengumuman-cari') }}" method="GET">
                                    <input style="border: none;" type="search" name="cari" value="{{ request()->get('cari') }}">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Kategori</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    @foreach ($kategori as $kateg)
                                    <li><a href="{{ route('cari-kategori', $kateg->id) }}">{{ $kateg->name }}<span>({{ $kateg->posts->count() }})</span></a></li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Lainnya</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($sidebar as $side)
                                <div class="post-item clearfix">
                                    <h4><a href="{{ route('pengumuman-detail',$side->id) }}">{{ $side->title }}</a></h4>
                                    <time datetime="{{ $side->created_at }}">{{ $side->created_at }}</time>
                                </div>
                                @endforeach

                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul class="tags">
                                    @foreach ($tags as $tag)
                                    <li><a href="{{ route('cari-tag', $tag->id) }}">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End pengumumandetail sidebar -->

                </div>

            </div>
        </section><!-- End pengumumandetail detail Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('bolmongkab.layout.footer')

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('bolmongkab.layout.script')


</body>

</html>
