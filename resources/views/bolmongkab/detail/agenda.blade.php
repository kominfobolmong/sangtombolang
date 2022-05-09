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
            <div class="container">
                <div class="judul">
                    <h2>AGENDA</h2>
                    <hr>
                </div>
                @foreach ($events as $event )
                <article class="entry">

                    <h2 class="entry-title">
                        <a href="{{ route('event-detail',$event->id) }}">{{ $event->title }}</a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="pengumuman-detail.html">{{ $event->user }}</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="pengumuman-detail.html"><time datetime="{{ $event->created_at }}">{{ $event->created_at }}</time></a></li>
                        </ul>
                    </div>

                </article><!-- End pengumuman entry -->
                @endforeach
                {!! $events->links() !!}
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
