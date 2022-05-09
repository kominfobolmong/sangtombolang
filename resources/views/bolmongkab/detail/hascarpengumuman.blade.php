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

                <div class="d-flex align-items-center">
                    <ol>
                        <li><a href="{{ ('/') }}">Home</a></li>
                        <li>Pengumuman</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="pengumuman" class="pengumuman">
            <div class="container">
                <div class="judul">
                    <h2>PENGUMUMAN</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-lg-8 entries">
                        @foreach ($posts as $post )
                        <article class="entry animate__animated animate__flipInX">

                            <h2 class="entry-title">
                                <a href="{{ route('pengumuman-detail',$post->id) }}">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="pengumuman-detail.html">{{ $post->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="pengumuman-detail.html"><time
                                                datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {!! nl2br(e($post->content)) !!}
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('pengumuman-detail',$post->id) }}" method="POST">Selengkapnya...</a>
                                </div>
                            </div>

                        </article><!-- End pengumuman entry -->
                        @endforeach


                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Cari</h3>
                            <div class="sidebar-item search-form">
                                <form action="{{ ('/pengumuman-cari') }}" method="GET">
                                    <input type="search" name="cari" value="{{ request()->get('cari') }}">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Kategori</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    @foreach ($kategori as $kateg)
                                    <li><a href="#">{{ $kateg->name }}<span>(0)</span></a></li>
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
                                <ul>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End pengumumandetail sidebar -->
                </div>

        </section><!-- End detail Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('bolmongkab.layout.footer')
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    @include('bolmongkab.layout.script')


</body>

</html>
