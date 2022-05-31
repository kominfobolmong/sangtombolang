<div class="container d-flex align-items-center">

  <h1 class="logo me-auto"><a href="index.html">{{$namakecamatan->nama_kecamatan}}</a></h1>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="{{ ('/') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
      <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a class="{{ (request()->is('visi-misi')) ? 'active' : '' }}" href="{{ ('/visi-misi') }}">Visi & Misi</a></li>
          <li class="{{ (request()->is('struktur')) ? 'active' : '' }}"><a href="{{ ('/struktur') }}">Struktur Organisasi</a></li>
          <li><a class="{{ (request()->is('dasar-hukum')) ? 'active' : '' }}" href="{{ ('/dasar-hukum') }}">Dasar Hukum</a></li>
          <li class="{{ (request()->is('potensi')) ? 'active' : '' }}"><a href="{{ ('/potensi') }}">Potensi</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="{{ (request()->is('event','berita')) ? 'active' : '' }}" href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a class="{{ (request()->is('event')) ? 'active' : '' }}" href="{{ ('/event') }}">Agenda</a></li>
          <li><a class="{{ (request()->is('berita')) ? 'active' : '' }}" href="{{ ('/berita') }}">Berita</a></li>
        </ul>
      </li>
      <li><a href="contact.html">Kontak</a></li>
      <li style="margin-left: 3%"><lottie-player src="https://assets4.lottiefiles.com/packages/lf20_m6JOQm.json"  background="transparent"  speed="2"  style="max-width: 60px; margin: auto;"  loop  autoplay></lottie-player</li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</div>