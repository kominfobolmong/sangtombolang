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
                        <li>Desa</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="kecamatan" class="kecamatan">
            <div class="container">
                <div class="judul">
                    <h2>INFORMASI DESA</h2>
                    <hr>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Link Sideka</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($desa as $des )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $des->nama }}</td>
                            <td><a href="{{ $des->link }}">{{ $des->link }}</a></td>
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
