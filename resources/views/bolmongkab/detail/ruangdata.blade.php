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
                        <li>Ruang Data</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= detail Section ======= -->
        <section id="detail" class="detail">
            @foreach($ruangdata as $data)
            <div class="container">
                <div class="judul">
                    <h2>RUANG DATA</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="../assets/img/ruangdata.jpg" alt="" class="ruangdata">
                    </div>
                    <div class="col-8">
                        <h3>{{$data->nama}}</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, nemo similique vel modi
                            iusto exercitationem alias incidunt hic autem sequi aperiam eligendi. Aliquam numquam
                            incidunt ipsa doloremque voluptates, possimus non.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, sunt! A laboriosam quod
                            fugiat voluptatem repellat expedita impedit enim minima et ipsa deleniti obcaecati magni
                            eius, aut vero optio mollitia?</p>
                    </div>

                </div>
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
