<div class="container d-flex align-items-center">

  @forelse($namakecamatan as $item)
  <a href="{{ ('/') }}" style="margin-right: 5px; max-width: 2%" class="logo"><img src="{{ Storage::url($item->logo ?? null) }}" alt="" class="img-fluid"></a>
  <h1 class="logo me-auto"><a href="{{ ('/') }}">{{$item->nama_kecamatan}}</a></h1>
  @empty

  @endforelse

  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="{{ ('/') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Beranda</a></li>
      <li class="dropdown"><a class="{{ (request()->is('visi-misi','struktur','dasar-hukum','potensi')) ? 'active' : '' }}" href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
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
      <li class="dropdown"><a class="{{ (request()->is('foto','video')) ? 'active' : '' }}" href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a class="{{ (request()->is('foto')) ? 'active' : '' }}" href="{{ ('/foto') }}">Foto</a></li>
          <li><a class="{{ (request()->is('video')) ? 'active' : '' }}" href="{{ ('/video') }}">Video</a></li>
        </ul>
      </li>
      <li><a href="{{ ('/kontak') }}" class="{{ (request()->is('/kontak')) ? 'active' : '' }}">Kontak</a></li>
      <li><lottie-player src="https://assets1.lottiefiles.com/packages/lf20_zswfyqdp.json"  background="transparent"  speed="1"  style="max-width: 100px; margin: auto;"  loop  autoplay></lottie-player</li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</div>