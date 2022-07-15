@extends('layouts.app')

<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@section('content')
<style>
  body{
    background-image: none;
  }
</style>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<section id="hero" style="margin-top: -24px!important;">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhpavh-IjS3gYplxhmZEDO1GIpZsapTG6NJeH7xmkYO9VI1oT3Aum8-ak5P6XCQ7pG4SaxzGWI92bRLlvzbKwADE-uNh6RpC5yaAKBRtdlLF5_CLQ7f-c49LFTux3Cnw0pLAGYjaWip6scHQ1QUWPBib-PDIp31GixctjApCunKHbfKkSInWUHF5mkXiw/s1280/IMG-20220604-WA0000.jpg)">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(https://foto.data.kemdikbud.go.id/getImage/10207079/6.jpg)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang SMKS LMC MODEL INDUSTRI</h2>
          <p>Dengan konsep sekolah di tempat sepi yang jauh dari keramaian, di sudut desa yang jauh dari pemukiman, SMK LMC Model Industri dan SMA LMC Superior didirikan di Jalan Sipirok-Padang Sidempuan Km 17,5, Desa Pargarutan Tonga, Kecamatan Angkola Timur, Kabupaten Tapanuli Selatan. Menurut pendirinya, Drs. Parsaulian Tambunan, M.Pd, sekolah ini didesain sebagai sebuah sekolah yang terintegrasi.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="https://foto.data.kemdikbud.go.id/getImage/69762713/2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>KOMPETENSI KEAHLIAN / JURUSAN SMK LMC MODEL INDUSTRI</h3>
            <p>
            Geologi Pertambangan, Teknik Komputer Jaringan, Teknik Kendaraan Ringan Otomotif, Teknik Pemesinan, Agribisnis Pembibitan dan Kultur Jaringan
            </p>
            <h3>JAM PEMBELAJARAN DI SMKS LMC MODEL INDUSTRI</h3>
            <p>Pembelajaran di SMKS LMC MODEL INDUSTRI dilakukan pada Sehari Penuh. Dalam seminggu, pembelajaran dilakukan selama 5 hari.</p>
            <h3>AKREDITASI</h3>
            <p>SMKS LMC MODEL INDUSTRI memiliki akreditasi B, berdasarkan sertifikat 032/BAN-SM/SK/2019.</p>
          </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
            <ul>
              <h3>Identitas Satuan Pendidikan</h3>
              <li><i class="bi bi-check-circle"></i>Nama    : SMKS LMC MODEL INDUSTRI</li>
              <li><i class="bi bi-check-circle"></i>NPSN    : 69762713</li>
              <li><i class="bi bi-check-circle"></i>Alamat  :	JL. RAYA SIPIROK, PADANGSIDIMPUAN KM. 19 NO. 88 DESA SIRUMBI</li>
              <li><i class="bi bi-check-circle"></i>Kode Pos : 22733</li>
              <li><i class="bi bi-check-circle"></i>Kelurahan : PAL XI</li>
              <li><i class="bi bi-check-circle"></i>Kecamatan / Kota (LN)	: Kec. Angkola Timur</li>
              <li><i class="bi bi-check-circle"></i>Kab :	Kab. Tapanuli Selatan</li>
              <li><i class="bi bi-check-circle"></i>Provinsi : Sumatera Utara</li>
              <li><i class="bi bi-check-circle"></i>Status Sekolah : Swasta</li>
              <li><i class="bi bi-check-circle"></i>Jenjang Pendidikan : SMK</li>
            </ul>
          </div>
        </div>
      </div>
      </section><!-- End Counts Section -->
        <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-person-circle"></i>
              <span style="font-size:30px !important;">71</span>
              <br> <br>
              <strong>Siswa</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-person-circle"></i>
              <span style="font-size:30px !important;">46</span>
              <br> <br>
              <strong>Siswi</strong> 
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-mortarboard-fill"></i>
              <span style="font-size:30px !important;">250</span>
              <br> <br>
              <strong>Alumni</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-award-fill"></i>
              <span style="font-size:30px !important;">B</span>
              <br> <br>
              <strong>Akreditasi</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
      <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>SMKS LMC MODEL INDUSTRI berada di koordinat Garis lintang: 1.4907 dan Garis bujur: 99.3565.</p>
        </div>

      </div>

      <div>
      <iframe style="border:0; width: 100%; height: 350px;"src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7976.9360183224935!2d99.3565!3d1.4907!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96758f3ae15a3579!2zMcKwMjknMjYuNSJOIDk5wrAyMScyMy40IkU!5e0!3m2!1sen!2sus!4v1657683428241!5m2!1sen!2sus"> </iframe>
      </div>
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>	JL. RAYA SIPIROK, PADANGSIDIMPUAN KM. 19 NO. 88 DESA SIRUMBI</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>smklmcmodelindustri@yahoo.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telepon</h3>
                  <p>+062124904</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    
  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="container">
  <div class="copyright"  style="margin-top:1% !important;">
    &copy; Copyright <strong><span>SMKS LMC MODEL INDUSTRI</span></strong>
     
      
      </div>
      </div>
      </footer>
      @endsection

<script src="{{ asset('js/main.js') }}"></script> 
<script src="{{ asset('js/apps.js') }}"></script> 
<script src="{{ asset('js/bootstrap.js') }}"></script> 