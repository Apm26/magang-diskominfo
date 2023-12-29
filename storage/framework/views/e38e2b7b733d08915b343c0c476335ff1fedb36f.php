<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Dinas Kominfo Kabupaten Bandung</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="shortcut icon" href="<?php echo e(asset('assets/icons/ic-logo.ico')); ?>">

     <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-light bg-success navbar-expand-lg p-1 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?php echo e(asset('assets/images/logo-utama.png')); ?>" height="55" width="90" alt="logo navbar">
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
              <a class="nav-link" href="#news">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#download">Unduh</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacts">Kontak</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    


    <div class="container mt-4">
        <?php echo $__env->yieldContent('container'); ?>
    </div>



    
    <section id="footer" class="bg-white">
      <div class="container py-4">
        <footer>
          <div class="row">
            
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
            
            <div class="grid-cols-4 col-md-3 mb-3">
              <h2 class="fw-bold mb-3">Follow kami</h2>
              <div class="d-flex mb-3">
                <a href="#" target="_blank" class="text-decoration-none text-dark">
                  <img src="<?php echo e('assets/icons/facebook.svg'); ?>" alt="" height="30" width="30" class="m-2">
                </a>
                <a href="#" target="_blank" class="text-decoration-none text-dark">
                  <img src="<?php echo e('assets/icons/instagram.svg'); ?>" alt="" height="30" width="30" class="m-2">
                </a>
                <a href="#" target="_blank" class="text-decoration-none text-dark">
                  <img src="<?php echo e('assets/icons/tiktok.svg'); ?>" alt="" height="30" width="30" class="m-2">
                </a>
                <a href="#" target="_blank" class="text-decoration-none text-dark">
                  <img src="<?php echo e('assets/icons/youtube.svg'); ?>" alt="" height="30" width="30" class="m-2">
                </a>
              </div>
            </div>
            
            <div class="grid-cols-4 col-md-3 mb-3">
              <h2 class="font-inter fw-bold mb-3">Kontak kami</h2>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link text-muted p-0">diskominfo.co.id</a>
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
            
            <div class="grid-cols-4 col-md-3 mb-3">
              <h2 class="fw-bold mb-3">Alamat kami</h2>
              <p>Jln. Braga , Kabupaten Bandung no.115</p>
            </div>
          </div>
        </footer>
      </div>
    </section>
    



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
<?php /**PATH C:\Users\Nur Kamil\OneDrive\Documents\File koding agung\magang-laravel\diskominfokabbdg_redesign\resources\views/layouts/main.blade.php ENDPATH**/ ?>