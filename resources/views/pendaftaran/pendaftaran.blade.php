<!-- resources/views/pendaftaran.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="/assets/img/logo/image.png" rel="icon">
  <title>PPDB SDM Kaliwates</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @vite("resources/css/app.css")
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="font-Poppins">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

        <div class="w-[350px]">
          <a href="/">
          <img src="assets/img/logo/logo1.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="/">Home</a></li>
            <li><a class="nav-link scrollto active" href="/pendaftaran">Pendaftaran</a></li>

            </li>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 getstarted scrollto bg-black">Log in</a>

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

    <section class=" container mx-auto py-1 px-3 bg-blueGray-50 font-Poppins">
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 mt-32">

            <form action="{{route('user.store')}}"method="POST">
                @csrf
              <h6 class="p-4 border-r-2 rounded text-white text-lg bg-brightRed mt-3 mb-6 font-bold uppercase">
                Identitas Anak
              </h6>
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Nama Lengkap
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="nama_lengkap"  placeholder="Nama Lengkap"  >
                  </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Nama Panggilan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="nama_panggilan"  placeholder="Nama Panggilan"  >
                </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                            NIK
                            </label>
                            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            name="nik"  placeholder="NIK"  >
                        </div>

                </div>
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      No. Kartu Keluarga
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="no_kartu_keluarga" placeholder="No. Kartu Keluarga"   >
                  </div>
                </div>


              <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      No. Akta Lahir
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="no_kartu_akta_lahir"  placeholder="No. Akta Lahir"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tempat Lahir
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tempat"  placeholder="Tempat Lahir"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tanggal Lahir
                    </label>
                    <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tanggal_lahir"  placeholder="Tanggal Lahir"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Kewarganegaraan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="kewarganegaraan"  placeholder=" Kewarganegaraan"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Berkebutuhan Khusus
                    </label>
                    <select name="berkebutuhan_khusus" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  >
                        <option value="Pilih">Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>

                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Jenis Kelamin
                    </label>
                    <select name="jenis_kelamin" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""   >
                      <option value="">Pilih</option>
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                  </select>
              </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Usia
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="usia"  placeholder=" Usia"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Alamat Tempat Tinggal
                    </label>
                    <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="alamat_tempat_tinggal"placeholder="Alamat tempat tinggal"  >
                    </textarea>
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      RT
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="rt"  placeholder=" RT"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                     RW
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="rw"  placeholder="RW"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Desa/ Kelurahan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="desa"  placeholder="Desa/ Kelurahan"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Kecamatan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="kecamatan"  placeholder="Kecamatan"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Lintang
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="lintang"  placeholder="Lintang">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Bujur
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="bujur"  placeholder="Bujur">
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Kode Pos
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="kode_pos"  placeholder="Kode Pos"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tinggal Bersama
                    </label>
                    <select name="tempat_tinggal" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                      <option value="Pilih">Pilih</option>
                      <option value="Orang Tua">Orang Tua</option>
                      <option value="Wali">Wali</option>
                      <option value="Kos">Kos</option>
                      <option value="Asrama">Asrama</option>
                      <option value="Panti Asuhan">Panti Asuhan</option>
                  </select>
               </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Alat Transportasi
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="alat_transportasi"  placeholder="Alat Transportasi"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Nomor Telepon
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="no_hp"  placeholder="Nomor Telepon"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Email Anak
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      name="email_anak"  placeholder="Email Anak"  >
                    </div>
                  </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Agama
                    </label>
                    <select name="agama" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""  >
                      <option value="Pilih">Pilih</option>
                      <option value="Islam">Islam</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Buddha">Buddha</option>
                      <option value="Khonghucu">Khonghucu</option>
                  </select>
               </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Hobi
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="hobi"  placeholder="Hobi"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Cita-cita
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="cita_cita"  placeholder="Cita-cita"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Anak ke  (sesuai kk)
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="anak_ke"  placeholder="Anak ke  (sesuai kk)"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Jumlah Saudara Kandung
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="jumlah_saudara_kandung"  placeholder="Jumlah Saudara Kandung"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Bahasa Sehari-hari
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="bahasa_sehari_hari"  placeholder="Bahasa Sehari-hari"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tinggi Badan (cm)
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tinggi_badan"  placeholder="Tinggi Badan (cm)"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Berat Badan (kg)
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="berat_badan"  placeholder=" Berat Badan (kg)"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Asal TK/RA, SD/MI
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="asal_tk_ra_sd_mi"  placeholder=" Asal TK/RA, SD/MI"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      NPSN TK/RA, SD/MI
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="npsn_tk_ra_sd_mi"  placeholder="NPSN TK/RA, SD/MI"  >
                  </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        NISN
                      </label>
                      <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      name="nisn"  placeholder=" NISN"  >
                    </div>
                  </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Penerima KPS/KPH
                    </label>
                    <select name="penerima_kps_kph" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""  >
                      <option value="Pilih">Pilih</option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                  </select>
              </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Apakah Memiliki KIP
                    </label>
                    <select name="kip" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""  >
                      <option value="Pilih">Pilih</option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                  </select>
               </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Bersedia Menerima PIP
                    </label>
                    <select name="pip" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""  >
                      <option value="Pilih">Pilih</option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                  </select>
              </div>
                </div>

                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Diterima di Kelas
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      name="diterima_di_kelas"  placeholder="Diterima di Kelas"  >
                    </div>
                  </div>

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                      Tanggal Mendaftar
                    </label>
                    <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tanggal_mendaftar"  placeholder="Tanggal Mendaftar"  >
                  </div>
                </div>
              </div>
                {{-- form ortu --}}
                <hr class="mt-6 border-b-1 border-blueGray-300">

                <h6 class="p-4 border-r-2 rounded text-white text-lg bg-brightRed mt-3 mb-6 font-bold uppercase">
                    Identitas Orang Tua/ Wali
                  </h6>

                {{-- identitas Ayah  --}}
                <div class="flex flex-wrap">
                <div class="w-full lg:w-12/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nama Ayah Kandung
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="nama_ayah_kandung"  placeholder=" Nama Ayah Kandung"  >
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nik Ayah Kandung
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="nik_ayah"  placeholder="Nik Ayah Kandung"  >
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Tempat Lahir
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tempat_ayah"  placeholder="Tempat Lahir"  >
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Tanggal Lahir
                    </label>
                    <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="tanggal_lahir_ayah"  placeholder="Tanggal Lahir"  >
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Pendidikan Terakhir
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="pendidikan_terakhir_ayah"  placeholder=" Pendidikan Terakhir"  >
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Pekerjaan
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="pekerjaan_ayah"  placeholder="Pekerjaan"  >
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Penghasilan Per bulan
                    </label>
                    <select name="penghasilan_per_bulan_ayah" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""  >
                        <option value="Pilih">Pilih</option>
                        <option value="1"> Rp. 500.000</option>
                        <option value="2">Rp. 500.000,- s/d Rp. 999.999,-</option>
                        <option value="3">Rp. 1.000.000,- s/d Rp. 1.999.999,-</option>
                        <option value="4">Rp. 2.000.000,- s/d Rp. 4.999.999,-</option>
                        <option value="5">Rp. 5.000.000,- s/d Rp. 20.000.000,-</option>
                        <option value="6">Rp. 20.000.000,-</option>
                        <option value="7">Tidak Berpenghasilan</option>
                </select>
                </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Berkebutuhan khusus
                    </label>
                    <select name="berkebutuhan_khusus_ayah" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""  >
                        <option value="Pilih">Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Alamat(kosongi jika sama)
                    </label>
                    <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="alamat_ayah"  placeholder="Alamat(kosongi jika sama)"></textarea>
                    </div>
                </div>

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nomor Telepon
                    </label>
                    <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    name="no_hp_ayah"  placeholder=" Nomor Telepon"  >
                    </div>
                </div>

                {{-- Identitas Ibu --}}

                <div class="flex flex-wrap">
                    <div class="w-full lg:w-12/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nama Ibu Kandung
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="nama_ibu_kandung"  placeholder="Nama Ibu Kandung"  >
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                            NIK Ibu Kandung
                            </label>
                            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            name="nik_ibu"  placeholder="NIK Ibu Kandung"  >
                        </div>
                        </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Tempat Lahir
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="tempat_ibu"  placeholder="Tempat Lahir"  >
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Tanggal Lahir
                        </label>
                        <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="tanggal_lahir_ibu"  placeholder="Tanggal Lahir"  >
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                            Pendidikan Terakhir
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="pendidikan_terakhir_ibu"  placeholder="Pendidikan Terakhir"  >
                        </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Pekerjaan
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="pekerjaan_ibu"  placeholder="Pekerjaan"  >
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Penghasilan Per bulan
                        </label>
                        <select name="penghasilan_per_bulan_ibu" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""  >
                            <option value="Pilih">Pilih</option>
                            <option value="1">7 Rp. 500.000</option>
                            <option value="2">Rp. 500.000,- s/d Rp. 999.999,-</option>
                            <option value="3">Rp. 1.000.000,- s/d Rp. 1.999.999,-</option>
                            <option value="4">Rp. 2.000.000,- s/d Rp. 4.999.999,-</option>
                            <option value="5">Rp. 5.000.000,- s/d Rp. 20.000.000,-</option>
                            <option value="6"> Rp. 20.000.000,-</option>
                            <option value="7">Tidak Berpenghasilan</option>
                    </select>
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Berkebutuhan Khusus
                        </label>
                        <select name="berkebutuhan_khusus_ibu" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"  placeholder=""  >
                        <option value="Pilih">Pilih</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Alamat(kosongi jika sama)
                        </label>
                        <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="alamat_ibu"
                        ></textarea>
                    </div>
                    </div>

                    <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                        Nomor Telepon
                        </label>
                        <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        name="no_hp_ibu"  placeholder="Nomor Telepon"  >
                    </div>
                    </div>


               {{-- wali --}}

                <hr class="mt-6 border-b-1 border-blueGray-300">

                <h6 class="p-4 border-r-2 rounded text-white text-lg bg-brightRed mt-3 mb-6 font-bold uppercase w-full">
                    Identitas WaliJika Ada
                  </h6>

            {{-- identitas wali  --}}
            <div class="flex flex-wrap">
            <div class="w-full lg:w-12/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Nama Wali
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="nama_wali"
                placeholder="Nama Wali">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    NIK Wali
                </label>
                <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="nik_wali" placeholder="NIK Wali" >
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Tempat Lahir
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="tempat_wali" placeholder="Tempat Lahir" >
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Tanggal Lahir
                </label>
                <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="tanggal_lahir_wali" placeholder="Tanggal Lahir">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Pendidikan Terakhir
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="pendidikan_terakhir_wali" placeholder="Pendidikan Terakhir">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Pekerjaan
                </label>
                <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="pekerjaan_wali" placeholder="Pekerjaan">
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Penghasilan Per bulan
                </label>
                <select name="penghasilan_per_bulan_wali" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                    <option value="Pilih">Pilih</option>
                    <option value="1"> Rp. 500.000</option>
                    <option value="2">Rp. 500.000,- s/d Rp. 999.999,-</option>
                    <option value="3">Rp. 1.000.000,- s/d Rp. 1.999.999,-</option>
                    <option value="4">Rp. 2.000.000,- s/d Rp. 4.999.999,-</option>
                    <option value="5">Rp. 5.000.000,- s/d Rp. 20.000.000,-</option>
                    <option value="6">Rp. 20.000.000,-</option>
                    <option value="7">Tidak Berpenghasilan</option>
                </select>
            </div>
            </div>


            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Alamat(kosongi jika sama)
                </label>
                <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="alamat_wali" placeholder="Alamat(kosongi jika sama)"></textarea>
                </div>
            </div>

            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3">
                <label class="block uppercase text-blueGray-600 text-sm font-bold mb-2">
                    Nomor Telepon
                </label>
                <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                name="no_hp_wali" placeholder=" Nomor Telepon">
                </div>
            </div>
            <div class="relative w-full">
                <input type="submit" name="submit"
                    class="relative z-10 inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-gray-900 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    value="submit">


                </div>
            </div>
    </form>
</section>
<footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Teknik Universitas Muhammadiyah Jember</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
