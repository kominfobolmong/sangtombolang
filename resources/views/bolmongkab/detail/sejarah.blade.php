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
                        <li>Sejarah</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="sejarah" class="sejarah">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        @foreach ($sejarah as $sejah)
                        <div class="judul">
                            <h2>SEJARAH</h2>
                            <hr>
                        </div>

                        <img src="public/statik-images/{{ $sejah->image }}" alt="">
                        <p>
                            {!! nl2br(e($sejah->body)) !!}
                        </p>
                    </div>
                    @endforeach

                    <div class="col-lg-5">
                        <div class="judul">
                            <h2>DETAIL SEJARAH</h2>
                            <hr>
                        </div>
                        @foreach ($detailsejarah as $dsejarah)
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne{{ $dsejarah->id }}" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            {{ $dsejarah->caption }}
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne{{ $dsejarah->id }}" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                       <p style="text-align: justify;">{{ $dsejarah->body }}</p> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

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
