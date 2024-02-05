
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" type="image/x-icon" href="/image.png">

  <title>PPDB SDM Kaliwates</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @vite("resources/css/app.css")
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Favicons -->
    <link href="/assets/img/logo/image.png" rel="icon">

  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  {{-- eterna --}}
  {{-- <link href="eterna/assets/img/favicon.png" rel="icon">
  <link href="eterna/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="eterna/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="eterna/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="eterna/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="eterna/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="eterna/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="eterna/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="eterna/assets/css/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="font-Poppins">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="w-[350px]">
        <a href="index.html">
        <img src="assets/img/logo/logo1.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Informasi Biaya</a></li>
          <li><a class="nav-link scrollto" href="#services">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#team">Informasi Pendaftaran</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="nav-link scrollto " href="/pendaftaran">Pendaftaran</a></li>

          </li>
          @if (Route::has('login'))
              @auth
                  <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
              @else

                  <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 getstarted scrollto bg-black">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 getstarted scrollto bg-">Register</a>
                  @endif
              @endauth
          </div>
      @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(/assets/img/logo/activity1.png)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>PPDB Online</span> <br> SDM Kaliwates</h2>
                <p class="animate__animated animate__fadeInUp">Mari bergabung bersama kami dalam Penerimaan Peserta Didik Baru. Segera daftarkan diri Anda dan raih kesempatan untuk mendapatkan pendidikan berkualitas di SDM Kaliwates.</p>
                <a href="/pendaftaran" class=" btn-get-started animate__animated animate__fadeInUp text-white">Daftar Sekarang</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(eterna/assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Kenapa harus <span>SDM Kaliwates?</span></h2>
                <p class="animate__animated animate__fadeInUp">Sekolah dasar unggulan memiliki prestasi akademis yang tinggi, fasilitas yang baik, dan pendekatan pembelajaran yang inovatif. Guru-guru terlatih dan kurikulum yang diperbarui secara berkala juga merupakan faktor kunci.</p>
                <a href="/pendaftaran" class="btn-get-started animate__animated animate__fadeInUp text-white">Daftar Sekarang</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(eterna/assets/img/slide/slide-3.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Ingin mendapatkan <span>pendidikan terbaik?</span></h2>
                <p class="animate__animated animate__fadeInUp">SDM Kaliwates adalah pintu gerbangnya. Ayoo, jangan ragu untuk mendaftar dan jadilah bagian dari keberhasilan kami!</p>
                <a href="/pendaftaran" class="btn-get-started animate__animated animate__fadeInUp text-white">Daftar Sekarang</a>
              </div>
            </div>
          </div>  <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About Us</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
              <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
              <li><a class="nav-link scrollto" href="#team">Team</a></li>
              <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section --> --}}

    <!-- ======= About Us Section ======= -->
    <section id="about" class="portfolio">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h2 class="py-8 mt-14">Informasi Biaya</h2>
            <p>Rincian biaya sekolah sdm muhammadiyah kaliwates</p>
          </div>

          <div class="container" data-aos="zoom-in">

              <div class="flex items-center justify-center">
                <div class="flex items-center">
                  <img src="assets/img/logo/biaya.png" class="img-fluid" alt="">
                </div>

                </div>
      </section>

{{-- end about --}}

      <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
          <p>Deskripsi tentang SDM Kaliwates</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Fasilitas Olahraga</a></h4>
              <p class="description"> sarana yang disediakan untuk mendukung kegiatan fisik dan olahraga.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Fasilitas Pembelajaran</a></h4>
              <p class="description"> sarana dan prasarana yang disediakan untuk mendukung proses belajar mengajar.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Fasilitas Umum dan Pelayanan</a></h4>
              <p class="description">sarana dan layanan yang disediakan untuk memenuhi kebutuhan sehari-hari dan mendukung kegiatan sosial</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Fasilitas Kesehatan</a></h4>
              <p class="description"> sarana dan pelayanan yang didesain untuk menjaga dan meningkatkan kesehatan individu</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("/assets/img/logo/guru.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Guru dan Karyawan</a></h5>
                <p class="card-text">Kami menciptakan lingkungan di mana pendidik diberdayakan untuk berkembang, berinovasi, dan membimbing siswa melewati setiap tahapan pembelajaran. </p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("/assets/img/logo/activity2.png");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Gedung</a></h5>
                <p class="card-text"> Wadah pembelajaran yang menawarkan ruang kreatif dan teknologi mutakhir. Dengan fasilitas modern dan desain yang inovatif, gedung kami menjadi ruang eksplorasi pengetahuan dan penemuan diri.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("/assets/img/logo/ekstra.png");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Ekstrakulikuler</a></h5>
                <p class="card-text">ruang di mana siswa diberdayakan untuk mengejar minat mereka dengan keberanian dan semangat. Dari klub seni hingga olahraga, hingga sains, kami menawarkan beragam pilihan yang mencakup seluruh spektrum minat.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("/assets/img/logo/activity1.png");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Kelas</a></h5>
                <p class="card-text">Dengan suasana yang ramah dan guru-guru yang peduli, kami menciptakan ruang di mana pertanyaan diajukan, ide dijelajahi, dan pembelajaran adalah petualangan tak terbatas.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End More Services Section -->

    <!-- ======= Features Section ======= -->
   <!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
 <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->

    <!-- ======= Team Section ======= -->
    <section id="team">

        <!-- Flex container -->
        <div
          class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row"
        >
          <!-- What's Different -->
          <div class="flex flex-col space-y-12 md:w-1/2 "data-aos="zoom-in">
            <h2 class="max-w-md text-4xl font-bold text-center md:text-left font-Poppins">
            INFORMASI PENDAFTARAN
            </h2>

            <img src="assets/img/logo/persyaratan.png">
            <p class="max-w-sm text-center text-darkGrayishBlue md:text-left mt-1">
              Deskripsi tentang alur pendaftaran online di Sekolah Dasar Muhammadiyah Kaliwates
            </p>
          </div>

          <!-- Numbered List -->
          <div class="flex flex-col space-y-8 md:w-1/2">
            <!-- List Item 1 -->
            <div
              class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
            >
              <!-- Heading -->
              <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent" data-aos="fade-up">
                <div class="flex items-center space-x-2">
                  <div
                    class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
                  >
                    01
                  </div>
                  <h3 class="text-base font-bold md:mb-4 md:hidden">
                    Buat Akun Email              </h3>
                </div>
              </div>

              <div data-aos="fade-up">
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                    Buat Akun Email
                </h3>
                <p class="text-darkGrayishBlue">
                    Calon peserta didik atau orang tua membuat akun pendaftaran dengan mengisi formulir registrasi online.
                </p>
              </div>
            </div>

            {{-- list item 2 --}}
            <div
            class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row" data-aos="fade-up"
          >
            <!-- Heading -->
            <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent" >
              <div class="flex items-center space-x-2">
                <div
                  class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
                >
                  02
                </div>
                <h3 class="text-base font-bold md:mb-4 md:hidden" >
                    Login Akun Email
                </h3>
              </div>
            </div>

            <div>
              <h3 class="hidden mb-4 text-lg font-bold md:block">
                  Login Akun Email
              </h3>
              <p class="text-darkGrayishBlue">
                Setelah verifikasi berhasil, calon peserta didik atau orang tua login ke akun yang telah dibuat.          </p>
            </div>
          </div>

          {{-- list item 3 --}}
          <div
          class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
        >
          <!-- Heading -->
          <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent" data-aos="fade-up">
            <div class="flex items-center space-x-2">
              <div
                class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
              >
                03
              </div>
              <h3 class="text-base font-bold md:mb-4 md:hidden">
                Mengisi Formulir Pendaftaran          </h3>
            </div>
          </div>
          <div data-aos="fade-up">
            <h3 class="hidden mb-4 text-lg font-bold md:block">
                Mengisi Formulir Pendaftaran        </h3>
            <p class="text-darkGrayishBlue">
                Di dalam akun, pengguna mengisi formulir pendaftaran online dengan informasi seperti data calon peserta didik, alamat, riwayat pendidikan, dan lainnya.<br>
                Pastikan formulir mencakup semua informasi yang diperlukan sesuai persyaratan PPDB.
            </p>
          </div>
        </div>


          {{-- list item 4 --}}
        <div
        class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
      >
        <!-- Heading -->
        <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent" data-aos="fade-up">
          <div class="flex items-center space-x-2">
            <div
              class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
            >
              04
            </div>
            <h3 class="text-base font-bold md:mb-4 md:hidden" >
                Pembayaran atau Konfirmasi
            </h3>
          </div>
        </div>

        <div data-aos="fade-up">
          <h3 class="hidden mb-4 text-lg font-bold md:block">
            Pembayaran atau Konfirmasi
          </h3>
          <p class="text-darkGrayishBlue">
            biaya pendaftaran, calon peserta didik atau orang tua dapat melakukan pembayaran melalui sistem pembayaran offline      </p>
        </div>
      </div>

      {{-- list item 5 --}}
            {{-- <div
              class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row" data-aos="fade-up"
            >
              <!-- Heading -->
              <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                <div class="flex items-center space-x-2">
                  <div
                    class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
                  >
                    05
                  </div>
                  <h3 class="text-base font-bold md:mb-4 md:hidden">
                    Cetak Bukti Pendaftaran
                  </h3>
                </div>
              </div>

              <div>
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                    Cetak Bukti Pendaftaran
                 </h3>
                <p class="text-darkGrayishBlue">
                    Setelah proses pendaftaran selesai, pengguna dapat mencetak bukti pendaftaran sebagai tanda bahwa pendaftaran telah berhasil.
                </p>
              </div>
            </div> --}}

            </div>
          </div>
        </div>
      </section><!-- End Team Section -->


    <!-- ======= F.A.Q Section ======= -->
    {{-- <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Informasi Alur Pendaftaran</h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End F.A.Q Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kontak</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>SDM Muhammadiyah Kaliwates</h3>
              <p>Informasi lebih lanjut bisa klik icon dibawah </p>
              <div class="social-links">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/sdmuhammadiyahkaliwates/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://l.instagram.com/?u=https%3A%2F%2Ftinyurl.com%2FBpSyamsulMuhika&e=AT3NYtS4-9xi-0TR-qtDW9XsTde8Wi7cOuY9q7wqfucPw_UBYvNDAU7_eRoPcwSdKO_zQ2lyF7p23oDfFdPZv2mvYzpzGLyQk9OnWw" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <a href="https://maps.app.goo.gl/MPatECJ2e5xfWHsB9"><i class="ri-map-pin-line" ></i></a>
                <p>Jl. Muh. Yamin 09 Tegal Besar <br>Kaliwates – Jember</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>sdm.kaliwates@gmail.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>085334948136</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
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
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="text-lg-left text-center">
          <div class="copyright flex text-center justify-center">
            &copy; Copyright <strong> Teknik Informatika Unmuh Jember</strong>. All Rights Reserved
          </div>
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  {{-- eterna --}}

  <script src="eterna/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="eterna/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="eterna/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="eterna/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="eterna/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="eterna/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="eterna/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="eterna/assets/js/main.js"></script>
</body>

</html>
