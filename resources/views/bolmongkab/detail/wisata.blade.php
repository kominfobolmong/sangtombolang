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
                        <li>Bupati</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="wisata" class="wisata">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12" data-aos="fade-up">
                        <div class="section-titlebiru">
                            <h2>wisata</h2>
                        </div>

                        <div class="row">
                            @foreach($travels as $travel)
                            <div class="col-lg-3 col-md-6" data-aos="fade-up">
                                <article class="entry">

                                    <div class="entry-img">
                                        <img src="public/travel-images/{{ $travel->image }}" alt="">
                                    </div>

                                    <h2 class="entry-title" style="text-align: center;">
                                        {{ $travel->nama }}</a>
                                    </h2>

                                    {{-- <div class="entry-meta">
                                <ul style="margin-bottom : 1%">
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href="#">admin</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="#"><time
                                                datetime="25 januari">25 januari</time></a>
                                    </li>
                                </ul>
                                </div> --}}

                                    <!-- Button trigger modal -->
                                    
                                    <div class="row" style="margin: 0px;">
                                    <button type="button" style="margin-top: 3%; margin-right:5px;" class="btn btn-primary btn-sm center"
                                        data-toggle="modal" data-target="#exampleModal{{ $travel->id }}">
                                        <i class="bi bi-info-circle"></i>
                                    </button>

                                    <button type="button" style="margin-top: 3%;  margin-left:5px;" class="btn btn-primary btn-sm center"
                                        data-toggle="modal" data-target="#exampleTujuan{{ $travel->id }}">
                                        <i class="bi bi-compass"></i>
                                    </button>
                                </div>
                    

                                </article><!-- End wisata entry -->

                            </div>
                            @endforeach
                        </div>
                        <div style="text-align: center; margin-left: 44.5%;">
                            {{$travels->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>

                </div>


        </section><!-- End wisata Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        @include('bolmongkab.layout.footer')
    </footer><!-- End Footer -->

    <!-- Modal -->
    @foreach($travels as $travel)
    <div class="modal fade" id="exampleModal{{$travel->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $travel->nama }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ $travel->body }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleTujuan{{$travel->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Embed</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe src="{{$travel->embed}}" width="600" height="450" style="border:0;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    @include('bolmongkab.layout.script')

</body>

</html>
