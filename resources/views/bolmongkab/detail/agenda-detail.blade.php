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
                        <li>Agenda</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= agenda Section ======= -->
        <section id="agenda" class="agenda">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-12">

                        <div class="agenda-detail table-responsive">
                            <h3 class="agenda-title">DETAIL AGENDA :</h3>
                            <div class="agenda-item recent-posts">
                                <table class="table table-bordered table-striped">
                                <thead  class="table-primary">
                                    <tr>
                                        <th scope="col">Acara:</th>
                                        <th scope="col">Tempat:</th>
                                        <th scope="col">Tanggal:</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{!! nl2br(e($events->title)) !!}</td>
                                        <td>{{ $events->location }}</td>
                                        <td>{{ $events->date }}</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div><!-- End agenda recent posts-->

                        </div><!-- End agenda -->
                    </div><!-- End agenda agenda -->
                </div>
            </div>
        </section><!-- End agenda detail Section -->

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
