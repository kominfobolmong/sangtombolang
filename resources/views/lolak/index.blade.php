<!DOCTYPE html>
<html lang="en">

<head>
    @include('lolak.layout.head')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        @include('lolak.layout.header')
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                @foreach ($sliders as $i => $slide)
                <div class="carousel-item @if($i===0) active @endif" style=" background-image: url({{ $slide->image }})">
                    <div class="carousel-container">
                        <div class="container" style="text-align: left">
                          @foreach ($postssatu as $post)
                          <div class="col-5">
                            <h2 class="animate__animated animate__fadeInDown" style="float: left;">{!! \Illuminate\Support\Str::limit(nl2br($post->title), 80,'...') !!}</h2>
                            <p class="animate__animated animate__fadeInUp" style="float: left;">{!! \Illuminate\Support\Str::limit(nl2br($post->body), 200,'...') !!}</p>
                            <a style="float: left;" href="{{ route('berita-detail',$post->id) }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca</a>
                          </div>
                          @endforeach

                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">
      <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="row g-5">
          <div class="col-6">
            <div class="section-title">
              <h2><i class="bi bi-newspaper"></i></h2>
              <p>Berita terbaru</p>
            </div>
    
            <div class="row">
    
              @foreach ($posts as $post)
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="post-box">
                  <div class="post-img"><img src="{{ $post->image}}" class="img-fluid" alt=""></div>
                  <div class="meta">
                    <span class="post-date"> {{ \Carbon\Carbon::parse($post->created_at)->diffForhumans() }}</span>
                    <span class="post-author"> / {{ $post->user->name }}</span>
                  </div>
                  <h3 class="post-title-recent">{{ $post->title }}</h3>
                  <p class="recent-blog-body">{!! \Illuminate\Support\Str::limit(nl2br($post->body), 200,'...') !!}</p>
                  <a href="{{ route('berita-detail',$post->id) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              @endforeach
    
            </div>   
          </div>

          <div class="col-6">
            <div class="section-title">
              <h2><i class="bi bi-newspaper"></i></h2>
              <p>Kegiatan</p>
            </div>
    
            <div class="row">
    
              @foreach ($postskegiatan as $post)
              <div  style="background-color: aliceblue; padding:5%" class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="post-box">
                  <div class="post-img"><img src="{{ $post->image}}" class="img-fluid" alt=""></div>
                  <div class="meta">
                    <span style="font-size: 10px" class="post-date"> {{ \Carbon\Carbon::parse($post->created_at)->diffForhumans() }}</span>
                    <span style="font-size: 10px" class="post-author"> / {{ $post->user->name }}</span>
                  </div>
                  <h3 style="font-size: 12px" class="post-title-recent">{{ $post->title }}</h3>
                </div>
              </div>
              @endforeach
    
            </div>   

            <div class="section-title" style="margin-bottom:-4%; margin-top:4%">
              <h2><i class="bi bi-newspaper"></i></h2>
              <p>Agenda</p>
            </div>
    
            <div class="row">
    
              @forelse ($events as $event)
              <div class="col-lg-6" style="background-color: aliceblue; padding:5%;">
                <div class="member d-flex align-items-start">
                  {{-- <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div> --}}
                  <div class="member-info">
                    <h4>{{$event->title}}</h4>
                    <span>{{$event->location}} - {{$event->date}}</span>
                    <p>{!! nl2br($event->content)!!}</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
    
              @empty
    
              <p>Tidak Ada Agenda</p>
    
              @endforelse
    
            </div>  
          </div>
        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->
      
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      @include('lolak.layout.footer')
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('lolak.layout.script')

</body>

</html>
