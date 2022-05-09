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
                        <li>Download</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="download" class="download">
            <div class="container">
                <div class="judul">
                    <h2>DOWNLOAD</h2>
                    <hr>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama File</th>
                            <th scope="col">Link Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($downloads as $down)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }}</th>
                            <td>{{$down->nama}}</td>
                            <td><a class="btn btn-primary" href="{{ route('getdownload',$down->id) }}">Download</i></a>
                            </td>
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
