<div class="navbar d-flex align-items-center justify-content-between">

<div class="logoheader d-flex align-items-center ">
  <img src="../assets-front/img/logobolmong.png" alt="">
  <h1 class="logo"><a href="{{ ('/') }}">PEMERINTAH KECAMATAN <br> LOLAK</a></h1>
</div>


<nav class="nav-menu d-none d-lg-block">

  <ul>
    <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ ('/') }}">Beranda</a></li>

    <li class="drop-down {{ (request()->is('visi-misi','bupati','wakil-bupati','sekda','dinas','badandaerah','kecamatan','desa')) ? 'active' : '' }}"><a href="#">Pemerintah</a>
      <ul>
        <li class="{{ (request()->is('visi-misi')) ? 'active' : '' }}"><a href="{{ ('/visi-misi') }}">Visi dan Misi</a></li>
        <li class="drop-down {{ (request()->is('bupati','wakil-bupati','sekda')) ? 'active' : '' }}""><a href="#">Pimpinan</a>
          <ul>
            <li class="{{ (request()->is('bupati')) ? 'active' : '' }}"><a href="{{ ('/bupati') }}">Bupati</a></li>
            <li class="{{ (request()->is('wakil-bupati')) ? 'active' : '' }}"><a href="{{ ('/wakil-bupati') }}">Wakil Bupati</a></li>
            <li class="{{ (request()->is('sekda')) ? 'active' : '' }}"><a href="{{ ('/sekda') }}">Sekretariat</a></li>
          </ul>
        </li>
        <li class="drop-down {{ (request()->is('dinas','badandaerah','visi-misi','desa')) ? 'active' : '' }}""><a href="#">Perangkat Daerah</a>
          <ul>
            <li><a href="https://setda.bolmongkab.go.id/#/">Sekretariat Daerah</a></li>
            <li><a href="https://inspektorat.bolmongkab.go.id/">Inspektorat</a></li>
            <li class="{{ (request()->is('dinas')) ? 'active' : '' }}"><a href="{{ ('/dinas') }}">Dinas</a></li>
            <li class="{{ (request()->is('badandaerah')) ? 'active' : '' }}"><a href="{{ ('/badandaerah') }}">Badan Daerah</a></li>
            <li class="{{ (request()->is('visi-misi')) ? 'active' : '' }}"  ><a href="{{ ('/kecamatan') }}">Kecamatan</a></li>
            <li class="{{ (request()->is('desa')) ? 'active' : '' }}"><a href="{{ ('/desa') }}">Desa</a></li>
          </ul>
        </li>
      </ul>
    </li>

    <li class="drop-down {{ (request()->is('sejarah','arti-lambang')) ? 'active' : '' }}""><a href="#">Mengenal Bolmong</a>
      <ul>
        <li class="{{ (request()->is('sejarah')) ? 'active' : '' }}"><a href="{{ ('/sejarah') }}">Sejarah</a></li>
        <li class="{{ (request()->is('arti-lambang')) ? 'active' : '' }}"><a href="{{ ('/arti-lambang') }}">Arti Lambang</a></li>
      </ul>
    </li>

    <li class="drop-down {{ (request()->is('event','pengumuman','puskesmas')) ? 'active' : '' }}"><a href="#">Layanan dan Informasi</a>
      <ul>
        <li class="{{ (request()->is('event')) ? 'active' : '' }}"><a href="{{ ('/event') }}">Agenda</a></li>
        <li class="{{ (request()->is('pengumuman')) ? 'active' : '' }}"><a href="{{ ('/pengumuman') }}">Pengumuman</a></li>
        <li class="{{ (request()->is('puskesmas')) ? 'active' : '' }}"><a href="{{ ('/puskesmas') }}">Puskesmas</a></li>
        <!-- <li><a href="{{ ('/rpjmdtemp') }}">RPJMD</a></li> -->
      </ul>
    </li>

    <li class="drop-down {{ (request()->is('wisata')) ? 'active' : '' }}"><a href="#">Datang dan Kunjungi</a>
      <ul>
        <li><a href="{{ ('/#') }}">Ruang Data</a></li>
        <li class="{{ (request()->is('wisata')) ? 'active' : '' }}"><a href="{{ ('/wisata') }}">Tempat Wisata</a></li>
      </ul>
    </li>
    <li class="{{ (request()->is('download')) ? 'active' : '' }}"><a href="{{ ('/download') }}">Download</a></li>
  </ul>

</nav><!-- .nav-menu -->
</div>