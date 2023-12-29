<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Dinas Kominfo Kabupaten Bandung</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">

     <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-light bg-success navbar-expand-lg p-1 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo-utama.png') }}" height="55" width="90" alt="logo navbar">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profile">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#download">Unduh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#program">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Kontak</a>
            </li>
          </ul>
          {{-- <form class="d-flex" role="search">
            <button class="btn btn-danger ">Daftar</button>
          </form> --}}
        </div>
      </div>
    </nav>
    {{-- navbar --}}

<section id="hero">
  <div class="container text-center text-white">
    <div class="hero-title">
      <div class="hero-text" >Dinas Komunikasi & Informatika <br> Kabupaten Bandung </div>
      <h1>Data, Informasi dan Layanan pada Dinas Komunikasi Informatika dan Statistik Kabupaten Bandung</h1>
    </div>
  </div>
</section>
{{-- hero --}}


{{-- card-program --}}
<section id="program">
  <div class="container col-xl-9">
    <div class="row">
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-white rounded-3 shadow p-2 d-flex align-items-center justify-content-around">
          <div>
            <h1>Disiplin</h1>
          </div>
          <img src="{{ asset('assets/icons/ic-book.png') }}" height="40" width="40" alt="pendidikan">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-white rounded-3 shadow p-2 d-flex align-items-center justify-content-around">
          <div>
            <h1>Kreatif</h1>
          </div>
          <img src="{{ asset('assets/icons/ic-globe.png') }}" height="40" width="40" alt="pendidikan">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-white rounded-3 shadow p-2 d-flex align-items-center justify-content-around">
          <div>
            <h1>Inovatif</h1>
          </div>
          <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="40" width="40" alt="pendidikan">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-white rounded-3 shadow p-2 d-flex align-items-center justify-content-around">
          <div>
            <h1>Sinergis</h1>
          </div>
          <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="40" width="40" alt="pendidikan">
        </div>
      </div>
    </div>
  </div>
</section>
{{-- card-program --}}

{{-- berita --}}
<section id="berita" class="py-5">
  <div class="container py-5">
    <div class="header-berita text-center">
      <h1>Berita kabupaten Bandung </h1>
    </div>
    <div class="row py-5">
      <div class="col-lg-4">
        <div class="card border-0">
          <img src="{{ asset('assets/images/berita-1.jpg') }}" class="img-fluid mb-3" alt="berita 1">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">21 April 2023</p>
            <h2 class="fw-regular mb-3 fs-3">Pemkab Bandung borong 4 penghargaan di bidang kesehatan</h2>
            <p class="text-secondary">#bandungbedas</p>
            <a href="" class="text-decoration-none text-info">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0">
          <img src="{{ asset('assets/images/berita-2.jpg') }}" class="img-fluid mb-3" alt="berita 2">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">21 April 2023</p>
            <h2 class="fw-regular mb-3 fs-3"> Kabupaten Bandung TOP 3 dari 103 Kabupaten dalam Integrated Sustainability Indonesia Movement (I-SIM) for Regencies
            </h2>
            <p class="text-secondary">#bandungbedas</p>
            <a href="" class="text-decoration-none text-info">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0">
          <img src="{{ asset('assets/images/berita-3.jpg') }}" class="img-fluid mb-3" alt="berita 3">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">21 April 2023</p>
            <h2 class="fw-regular mb-3 fs-3"> 4 Kali berturut-turut Raih Penghargaan Badan Publik Informatif
            </h2>
            <p class="text-secondary">#bandungbedas</p>
            <a href="" class="text-decoration-none text-info">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-berita text-center">
      <button class="btn btn-outline-danger">Berita lainnya</button>
    </div>
  </div>
</section>
{{-- berita --}}

{{-- profil --}}
<section id="join" class="py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6">
        <div class="d-flex align-items-center">
          <div class="stripe mx-2"></div>
          <h3>Sekilas Diskominfo</h3>
        </div>
        <h4>Selamat datang di Diskominfo - Lembaga Informatika dan Komunikasi Daerah</h4>
        <p>"Temukan lebih lanjut tentang kami melalui Profil Sekilas, yang mencakup sejarah kami, visi dan misi yang membimbing setiap langkah, serta struktur organisasi yang memastikan layanan terbaik bagi masyarakat. Kami berkomitmen untuk menyediakan solusi informatika yang inovatif dan berkualitas, mendorong perkembangan teknologi di seluruh daerah. Temukan lebih banyak tentang perjalanan kami menuju pelayanan yang lebih baik di dalamnya."</p>
        <button class="btn btn-outline-danger">Selengkapnya</button>
      </div>
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/profil-1.jpg') }}" width="88%" height="88%" alt="foto mesjid">
      </div>
    </div>
  </div>

  <div class="carousel-profile">
    <div class="carousel-card" id="card1">
        <h2>VISI</h2>
        <p>"Terwujudnya Masyarakat Kabupaten Bandung Yang Bangkit, Edukatif, Dinamis, Agamis dan Sejahtera"</p>
    </div>

    <div class="carousel-card" id="card2">
        <h2>MISI</h2>
        <ul>
            <li>Misi 1 : Membangkitkan daya saing daerah.</li>
            <li>Misi 2 : Menyediakan layanan pendidikan dan kesehatan yang berkualitas dan merata.</li>
            <li>Misi 3 : Mengoptimalkan pembangunan daerah berbasis partisipasi masyarakat yang menjunjung tinggi kreatiftas dalam bingkai kearifan lokal dan berwawasan lingkungan.</li>
            <li>Misi 4 : Mengoptimalkan tata kelola pemerintahan melalui birokrasi yang profesional, dan tata kehidupan masyarakat yang berlandaskan nilai-nilai keagamaan.</li>
            <li>Misi 5 : Meningkatkan kesejahteraan masyarakat dengan prinsip keadilan dan keberpihakan pada kelompok masyarakat rendah.</li>
        </ul>
    </div>
</section>
{{-- join --}}

{{-- download --}}
<section id="download">
  <h2>Download Dokumen Penting</h2>

        <div class="search-filter">
            <input type="text" id="search" placeholder="Cari dokumen...">
            <select id="filter">
                <option value="all">Semua Kategori</option>
                <option value="peraturan">Peraturan</option>
                <option value="formulir">Formulir</option>
                <option value="brosur">Brosur</option>
            </select>
        </div>

        <ul class="document-list">
            <li class="peraturan">Peraturan 1</li>
            <li class="formulir">Formulir A</li>
            <li class="brosur">Brosur Produk</li>
            <!-- Daftar dokumen lainnya -->
        </ul>
</section>

{{-- download --}}

{{-- video --}}
<section id="video_youtube" class="py-5">
  <div class="container">
    <div class="header-berita text-center">
      <h2 class="fw-bold">Video dokumentasi kegiatan</h2>
    </div>
    <div class="row py-5">
      <div class="col-lg-4">
        <iframe width="100%" height="215" src="https://www.youtube.com/embed/KrTfXHY-YEI?si=rEb6tfzlXvHPSvKa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="col-lg-4">
        <iframe width="100%" height="215" src="https://www.youtube.com/embed/hq-nZs_nJRw?si=uPtskGQE4ciCgBOy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="col-lg-4">
        <iframe width="100%" height="215" src="https://www.youtube.com/embed/FaW-UUIpFK0?si=apJ-SjFcZEJKmFAV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
    <div class="footer-berita text-center">
      <button class="btn btn-outline-danger">Video lainnya</button>
    </div>
  </div>
</section>
{{-- video --}}

{{-- foto --}}
<section id="foto" class="section-foto paralax">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <div class="d-flex align-items-center">
        <div class="strip-putih"></div>
        <h2 class="fw-bold text-white">Foto kegiatan</h2>
      </div>
      <div>
        <button class="btn btn-outline-danger">Foto lainnya</button>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-6">
        <img src="{{ asset('assets/images/kegiatan-1.jpg') }}" class="img-fluid" height="50px" alt="foto 1">
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <img src="{{ asset('assets/images/kegiatan-2.jpeg') }}" class="img-fluid" height="50px" alt="foto 2">
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <img src="{{ asset('assets/images/kegiatan-3.jpg') }}" class="img-fluid" height="50px" alt="foto 3">
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <img src="{{ asset('assets/images/kegiatan-4.jpg') }}" class="img-fluid" height="50px" alt="foto 4">
      </div>
    </div>
  </div>
</section>
{{-- foto --}}


{{-- hubungi kami --}}
<form action="proses-form.php" method="post">
  <label for="nama">Nama Lengkap:</label>
  <input type="text" id="nama" name="nama" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="subjek">Subjek:</label>
  <input type="text" id="subjek" name="subjek" required>

  <label for="pesan">Isi Pesan:</label>
  <textarea id="pesan" name="pesan" rows="4" required></textarea>

  <label for="captcha">Kode Captcha:</label>
  <input type="text" id="captcha" name="captcha" required>
  <!-- Kode captcha dapat diimplementasikan menggunakan library pihak ketiga atau dibuat sendiri -->

  <button type="submit">Kirim</button>
</form>
{{-- hubungi kami --}}

 {{-- footer --}}
 <section id="footer" class="bg-white">
  <div class="container py-4 bg-danger-subtle">
    <footer>
      <div class="row">
        {{-- kolom 1 : navigasi --}}
        <div class="grid-cols-4 col-md-3 mb-3">
          <h2 class="fw-bold mb-3 text-center">Navigasi</h2>
          <div class="d-flex">
            <ul class="nav flex-column mx-2">
              <li class="nav-item mb-2"><a href="/profil" class="nav-link text-muted p-0">Tentang kami</a></li>
              <li class="nav-item mb-2"><a href="/berita" class="nav-link text-muted p-0">Kegiatan</a></li>
              <li class="nav-item mb-2"><a href="/berita" class="nav-link text-muted p-0">Galeri</a></li>
              <li class="nav-item mb-2"><a href="/berita" class="nav-link text-muted p-0">Download</a></li>
            </ul>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Layanan</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Radio kandaga</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Prestasi</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Video kegiatan</a></li>
            </ul>
          </div>
        </div>
        {{-- kolom 2 : media sosial --}}
        <div class="grid-cols-4 col-md-3 mb-3">
          <h2 class="fw-bold mb-3">Ikuti kami</h2>
          <div class="d-flex mb-3">
            <a href="#" target="_blank" class="text-decoration-none text-dark">
              <img src="{{ 'assets/icons/facebook.svg' }}" alt="" height="30" width="30" class="m-2">
            </a>
            <a href="#" target="_blank" class="text-decoration-none text-dark">
              <img src="{{ 'assets/icons/instagram.svg' }}" alt="" height="30" width="30" class="m-2">
            </a>
            <a href="#" target="_blank" class="text-decoration-none text-dark">
              <img src="{{ 'assets/icons/tiktok.svg' }}" alt="" height="30" width="30" class="m-2">
            </a>
            <a href="#" target="_blank" class="text-decoration-none text-dark">
              <img src="{{ 'assets/icons/youtube.svg' }}" alt="" height="30" width="30" class="m-2">
            </a>
          </div>
        </div>
        {{-- kolom 3 : konten --}}
        <div class="grid-cols-4 col-md-3 mb-3">
          <h2 class="font-inter fw-bold mb-3">Kontak kami</h2>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="#" class="nav-link text-muted p-0">diskominfo.gov.id</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link text-muted p-0">021-xxx-xxx</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link text-muted p-0">021-xxx-xxx</a>
            </li>
            <li class="nav-item mb-2">
              <a href="#" class="nav-link text-muted p-0">021-xxx-xxx</a>
            </li>
          </ul>
        </div>
        {{-- kolom 4 : alamat --}}
        <div class="grid-cols-4 col-md-3 mb-3">
          <h2 class="fw-bold mb-3">Alamat kami</h2>
          <p>Jl. Raya Soreang No.17, Pamekaran, Kec. Soreang, Kabupaten Bandung, Jawa Barat 40912</p>
        </div>
      </div>
    </footer>
  </div>
</section>
{{-- footer --}}



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
 </script>

 <script>
  const navbar = document.querySelector('.fixed-top');
  window.onscroll = () => {
    if (window.scrollY > 100) {
      navbar.classlist.add('scroll-nav-active')
       ;
      navbar.classlist.add('text-nav-active');
      navbar.classlist.remove('navbar-dark');
    } else {
      navbar.classlist.remove('scroll-nav-active');
      navbar.classlist.add('navbar-dark');
    }
  };
 </script>
</body>

</html>

