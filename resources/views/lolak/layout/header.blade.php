<div class="container d-flex align-items-center">

  <h1 class="logo me-auto"><a href="index.html">{{$namakecamatan->nama_kecamatan}}</a></h1>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="{{ ('/') }}" class="active">Home</a></li>
      <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li class="{{ (request()->is('visi-misi')) ? 'active' : '' }}"><a href="{{ ('/visi-misi') }}">Visi & Misi</a></li>
          <li class="{{ (request()->is('dasar-hukum')) ? 'active' : '' }}"><a href="{{ ('/dasar-hukum') }}">Dasar Hukum</a></li>
          <li class="{{ (request()->is('potensi')) ? 'active' : '' }}"><a href="{{ ('/potensi') }}">Potensi</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li class="{{ (request()->is('event')) ? 'active' : '' }}"><a href="{{ ('/event') }}">Agenda</a></li>
          <li class="{{ (request()->is('berita')) ? 'active' : '' }}"><a href="{{ ('/berita') }}">Berita</a></li>
        </ul>
      </li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="index.html" class="getstarted">Get Started</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</div>