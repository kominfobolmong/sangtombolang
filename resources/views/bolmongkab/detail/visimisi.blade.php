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
                        <li>Visi dan Misi</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="detail" class="detail">
            @foreach ($visimisi as $vmisi)
            <div class="container">
                <div class="judul">
                    <h2 class="animate__animated animate__bounceInDown">VISI DAN MISI</h2>
                    <hr>
                    <img class="animate__animated animate__bounceInLeft animate__fast" src="public/statik-images/{{ $vmisi->image }}"
                        style="margin-bottom: 3%; margin-top:3%;" alt="">
                </div>
                <p class="animate__animated animate__bounceInRight animate__fast">{!! nl2br(e($vmisi->body)) !!}</p>
            </div>
            @endforeach
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
