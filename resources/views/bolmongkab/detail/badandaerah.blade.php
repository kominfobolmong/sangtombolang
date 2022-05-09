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
        <section id="detail" class="detail">
            <div class="container">
                <div class="judul">
                    <h2>INFORMASI BADAN DAERAH</h2>
                    <hr>
                </div>
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($badandaerah as $badan )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $badan->nama }}</td>
                            <td><a href="{{ $badan->link }}">{{ $badan->link }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
