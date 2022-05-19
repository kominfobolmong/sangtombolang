<div class="container d-flex align-items-center">

  <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="index.html" class="active">Home</a></li>

      <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li class="{{ (request()->is('event')) ? 'active' : '' }}"><a href="{{ ('/event') }}">Agenda</a></li>
          <li class="{{ (request()->is('pengumuman')) ? 'active' : '' }}"><a href="{{ ('/pengumuman') }}">Pengumuman</a></li>
        </ul>
      </li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="index.html" class="getstarted">Get Started</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</div>