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

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                @foreach ($sliders as $i => $slide)
                <div class="carousel-item @if($i===0) active @endif"" style="background-image: url({{ $slide->image }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown"><span>KABUPATEN BOLAANG MONGONDOW</span>
                            </h2>
                            <p class="animate__animated animate__fadeInUp">Bolmong Hebat, Bolmong Maju</p>
                            <!-- <a href="sejarah.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya...</a> -->
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
    
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= sekilas Section ======= -->
        <section id="sekilas" class="sekilas">
            <div class="section-title">
                <h2>SEKILAS BOLMONG</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-7" data-aos="fade-right">
                    <img src="{{ asset('/public/statik-images/sekda-figma.jpg') }}" style="border-radius:3px;" class="img-fluid" alt="">
                </div>
                <div class="col-xl-8 col-lg-5 pt-5 pt-lg-0">
                    <p data-aos="fade-up">
                        Kabupaten Bolaang Mongondow adalah kabupaten di provinsi Sulawesi Utara, Indonesia. Ibu kotanya
                        adalah Lolak[1]. Etnis Mayoritas di kabupaten ini adalah Suku Mongondow. Bahasa ibu penduduk
                        asli di daerah ini adalah Bahasa Mongondow.
                        Kabupaten Bolaang Mongondow ditetapkan pada tanggal 23 Maret 1954, terletak pada salah satu
                        daerah Sulawesi Utara yang secara historis geografis adalah bekas danau, serta merupakan daerah
                        subur penghasil utama tambang dan hasil bumi lainnya.
                        Wilayah Kabupaten Bolaang Mongondow telah mengalami sejumlah pemekaran. Tahun 2007 dimekarkan
                        menjadi Kota Kotamobagu dan Kabupaten Bolaang Mongondow Utara. Pada tahun 2008 dimekarkan lagi
                        menjadi Kabupaten Bolaang Mongondow Timur dan Kabupaten Bolaang Mongondow Selatan.
                    </p>
                    <div class="read-more">
                        <a href="{{ ('sejarah') }}">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section><!-- End sekilas Section -->

        <div class="social-media">
            <a href="https://twitter.com/bolmong_kab" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com/pemkabbolaangmongondow" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/diskominfo.bolmong" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>

        <!-- ======= Pengumuman Section ======= -->
        <section id="blue" class="pengumuman">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8  col-md-6" data-aos="fade-up">
                        <div class="section-titlebiru">
                            <h2>PENGUMUMAN</h2>
                        </div>
                        @foreach ($posts as $post)
                        <article class="entry">

                            <h2 class="entry-title">
                                <a href="{{ route('pengumuman-detail',$post->id) }}"
                                    method="POST">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul style="margin-bottom : 1%">
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="#">{{ $post->user->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="#"><time
                                                datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                
                                    {!! nl2br(e($post->body)) !!}
                                
                                <div class="read-more">
                                    <a href="{{ route('pengumuman-detail',$post->id) }}" method="POST">Selengkapnya...</a>
                                </div>
                            </div>

                        </article><!-- End pengumuman entry -->
                        @endforeach
                    </div>

                    <div class="agenda-index col-lg-4" data-aos="fade-up">
                        <div class="section-titlebiru">
                            <h2>AGENDA</h2>
                        </div>
                        @foreach ($events as $event)
                        <article class="entry">
                            <h2 class="entry-title">
                                <a href="{{ route('event-detail',$event->id) }}">{{$event->title}}</a>
                            </h2>

                            <div class="entry-meta">

                                <h4>Dilaksanakan pada : {{$event->date}}</h4>

                            </div>
                        </article><!-- End agenda entry -->
                        @endforeach
                    </div>
                </div>

            </div>
        </section><!-- End pengumuman Section -->

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
