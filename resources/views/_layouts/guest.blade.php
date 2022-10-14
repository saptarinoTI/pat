<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link href="{{ asset('favicon.ico') }}" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->


  <!-- Navbar Start -->
  <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex bg-primary text-white">
      <div class="col-lg-6 px-5 text-start">
        <small><i class="fas fa-phone-alt me-2"></i>+62 548 22111, EXT. 1218</small>
        <small class="ms-4"><i class="fa fa-envelope me-2"></i>rsudbontang@yahoo.co.id</small>
      </div>
      <div class="col-lg-6 px-5 text-end">
        <small>Follow us:</small>
        <a class="text-white ms-3" href=""><i class="fab fa-facebook-f"></i></a>
        <a class="text-white ms-3" href=""><i class="fab fa-instagram"></i></a>
        <a class="text-white ms-3" href=""><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
      <a href="" class="navbar-brand ms-4 ms-lg-0">
        <img src="{{ asset('images/logo.png') }}" width="50"><span class="fw-bold text-primary ms-2">SPP
          Hemodialisa</span>
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
          <a href="{{ route('login') }}" class="nav-item nav-link btn text-white btn-primary">Login</a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->


  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" style="height: 100vh !important; object-fit: cover;"
            src="{{ asset('images/slider1.jpg') }}" alt="Image">
          <div class="carousel-caption">
            <div class="container">
              <div class="d-flex justify-content-center align-items-center w-100">
                <div class="col-10">
                  <h5 class=" text-white animated slideInDown" style="text-shadow:2px 2px 2px rgba(0, 0, 0, 0.8);">
                    Selamat Datang di <span class="text-primary fw-bold">RSUD</span> Taman Husada
                    Bontang</h5>
                  <h2 class=" mb-5 text-white animated slideInDown" style="text-shadow:2px 2px 2px rgba(0, 0, 0, 0.8);">
                    Sistem Pelayanan Pasien Hemodialisa</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Carousel End -->


  <!-- About Start -->
  <div class="container-xxl bg-primary" id="about">
    <div class="container">
      <div class="row g-5 pt-4 pb-5 align-items-center text-center justify-content-center">
        <div class="section-header text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
          <h1 class="display-6 text-white mb-4">SPP Hemodialisa</h1>
          <p class="mb-4 text-white-50">SPP Hemodialisa adalah Sistem Pelayanan Pasien Hemodialisa yang rutin
            dilaksanakan oleh RSUD
            Taman Husada Bontang.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Feature Start -->
  <div class="container-fluid bg-light py-6" id="fitur">
    <div class="container">
      <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <h2 class="mb-3">Fitur SPP Hemodialisa</h2>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="bg-white text-center h-100 p-4 p-xl-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" style="width: 50px; margin-bottom: 10px; color: #068F3E">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
            <h4 class="mb-3 fw-bold text-success">Data Pasien</h4>
            <p class="mb-4 text-dark text-sm">Pengelolaan data pasien hemodialisa</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="bg-white text-center h-100 p-4 p-xl-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" style="width: 50px; margin-bottom: 10px; color: #068F3E">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
            </svg>
            <h4 class="mb-3 fw-bold text-success">Jadwal Hemodialisa</h4>
            <p class="mb-4 text-dark text-sm">Mengelola jadwal Hemodialisa pasien setiap harinya</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="bg-white text-center h-100 p-4 p-xl-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" style="width: 50px; margin-bottom: 10px; color: #068F3E">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
            </svg>

            <h4 class="mb-3 fw-bold text-success">Traveling Dialisis</h4>
            <p class="mb-4 text-dark text-sm">Merupakan sebuah surat pengantar hemodialisis dalam bentuk form</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="bg-white text-center h-100 p-4 p-xl-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" style="width: 50px; margin-bottom: 10px; color: #068F3E">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h4 class="mb-3 fw-bold text-success">Dialisis Book</h4>
            <p class="mb-4 text-dark text-sm">Mengelola catatan dialisis pasien hemodialisa</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature End -->

  <!-- Footer Start -->
  <div class="footer pt-5 wow fadeIn" style="background-color: #3A526A;" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 col-md-6">
          <img src="{{ asset('images/logo.png') }}" width="80">
          <h5 class="text-white my-3">SPP
            Hemodialisa</h5>
          <div class="d-flex pt-2">
            <a class="btn btn-square btn-outline-light rounded-circle me-1" href="https://www.facebook.com/rsudbtg"
              target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-outline-light rounded-circle me-1"
              href="https://www.instagram.com/rsudbontang/?hl=id" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-square btn-outline-light rounded-circle me-0"
              href="https://www.youtube.com/channel/UCIp7xt5BBEIxrEyfGWqDIFA" target="_blank"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <h4 class="text-light mb-4">Address</h4>
          <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Letjend. S. Parman No. 1 Kelurahan Belimbing, Kecamatan
            Bontang Barat, Bontang 75331</p>
          <p><i class="fa fa-phone-alt me-3"></i>(0548) 22111 EXT. 1218</p>
          <p><i class="fa fa-envelope me-3"></i>rsudbontang@yahoo.co.id</p>
          <p><i class="fa fa-link me-3"></i><a href="https://rsud.bontangkota.go.id/"
              target="_blank">rsud.bontangkota.go.id</a></p>
        </div>
      </div>
    </div>
    <div class="bg-primary py-3">
      <div class="text-center text-white mb-3 mb-md-0">
        <small>&copy; RSUD Taman Husada Bontang</small>
      </div>
    </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>