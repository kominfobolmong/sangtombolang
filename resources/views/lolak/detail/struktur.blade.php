<!DOCTYPE html>
<html lang="en">

<head>
    @include('lolak.layout.head')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    @include('lolak.layout.header')
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Struktur Organisasi</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Struktur Organisasi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">
        @forelse($struktur as $item)
          <div class="col-lg-12">

    
                {{-- <h4>Struktur Organisasi</h4> --}}
                <img src="{{ Storage::url($item->struktur_organisasi ?? null) }}" alt="" style="  display: block;
                margin-left: auto;
                margin-right: auto;
                max-width: 80%;">
 
          </div>
        @empty
        <p>Struktur Organisasi Belum Diisi</p>
        @endforelse
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('lolak.layout.footer')
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('lolak.layout.script')

</body>

</html>