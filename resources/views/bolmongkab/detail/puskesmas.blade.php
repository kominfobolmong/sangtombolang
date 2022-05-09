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
        <section id="puskesmas" class="puskesmas table-responsive">
            <div class="container">
                <div class="judul">
                    <h2>INFORMASI PUSKESMAS</h2>
                    <hr>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Puskesmas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($puskesmas as $puskes )
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $puskes->nama }}</td>
                            <td>{{ $puskes->alamat }}</td>
                            <td>{{ $puskes->link }}</td>
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
