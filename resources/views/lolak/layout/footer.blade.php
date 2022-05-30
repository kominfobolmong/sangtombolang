<div class="footer-top">
  <div class="container">
      <div class="row">

          <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                  <h3>{{$namakecamatan->nama_kecamatan}}</h3>
                  <p>
                      A108 Adam Street <br>
                      NY 535022, USA<br><br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>
                      <strong>Email:</strong> info@example.com<br>
                  </p>
                  <div class="social-links mt-3">
                      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
              </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
              <h4>Profil Kecamatan</h4>
              <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Visi</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Misi</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Dasar Hukum</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Potensi</a></li>
              </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
              <h4>Informasi</h4>
              <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Agenda</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
              </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Cari Berita</h4>
              <p>Cari berita disini</p>
              <form action="{{ ('/berita-cari') }}" method="GET">
                <input style="border: none; width: 86.5%" type="text" name="cari" value="{{ request()->get('cari') }}">
                <input type="submit" value="Cari"><i class="bi bi-search"></i>
              </form>

          </div>

      </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
      &copy; Copyright <strong><span>{{$namakecamatan->nama_kecamatan}}</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
      Support by <a href="#">E-Government</a>
  </div>
</div>