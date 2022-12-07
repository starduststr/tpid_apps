<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>TPID</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/logo/logo only.png')}}" rel="icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <h1><a href="{{ route('home') }}">TPID</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="{{ asset('assets/img/logo.pn " alt="" cla') }}ss="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('download','digitalpelajar.apk') }}">Download</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">
      <div class="wave">
        <svg
          width="100%"
          height="355px"
          viewBox="0 0 1920 355"
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
        >
          <g
            id="Page-1"
            stroke="none"
            stroke-width="1"
            fill="none"
            fill-rule="evenodd"
          >
            <g
              id="Apple-TV"
              transform="translate(0.000000, -402.000000)"
              fill="#FFFFFF"
            >
              <path
                d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                id="Path"
              ></path>
            </g>
          </g>
        </svg>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 hero-text-image">
            <div class="row">
              <div class="col-lg-8 text-center text-lg-start">
                <h1 data-aos="fade-right">
                  TPID | Isi Pulsa Dan Kuota Jadi Mudah Dan Murah.
                </h1>
                <p class="mb-5" data-aos="fade-right" data-aos-delay="100">
                  Transksi 24 Jam, Proses Hitungan Detik, Dan Terpercaya
                </p>
                <p
                  data-aos="fade-right"
                  data-aos-delay="200"
                  data-aos-offset="-500"
                >
                <button onclick="download()" type="button" class="btn btn-outline-white">Download</button>
                  <span id="download" class="text-white"><img src="{{ asset('gif/load-31_128.gif') }}" alt="download" width="7%"> Downloading...</span>
                </p>
                
              </div>
              <div class="col-lg-4 iphone-wrap">
                <img
                  src="{{ asset('assets/img/mockup1 - Edited.png') }}"
                  alt="Image"
                  class="phone-1"
                  data-aos="fade-right"
                />
                <img
                  src="{{ asset('assets/img/mockup1 - Edited.png') }}"
                  alt="Image"
                  class="phone-2"
                  data-aos="fade-right"
                  data-aos-delay="200"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Home Section ======= -->
      <section class="section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-12" data-aos="fade-up">
              <h2 class="section-heading">
                Sat Set Sat Set Ga Pake Lama | Selalu Jadi Andalan Pas Mager
              </h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <h3 class="mb-3">Murah</h3>
                <p>
                  Harga kompetitif, silakan bandingkan dengan harga di
                  konter-konter dekat rumah Anda.
                </p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <i class="bi bi-clock"></i>
                </div>
                <h3 class="mb-3">Non Stop</h3>
                <p>
                  Kapan pun Anda bisa melakukan pembelian karena sistem kami
                  support 24 jam non stop.
                </p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <i class="bi bi-list-task"></i>
                </div>
                <h3 class="mb-3">Otomatis</h3>
                <p>
                  Transaksi diproses secara cepat dan otomatis oleh sistem kami.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div
            class="row justify-content-center text-center mb-5"
            data-aos="fade"
          >
            <div class="col-md-6 mb-5">
              <h2>Kategori Produk</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 bg-info mt-2">
              <div class="step">
                <h3>Pulsa</h3>
                <p>Pulsa XL, AXIS, TELKOMSEL, TRI, INDOSAT, By.U, SMARTFREN</p>
              </div>
            </div>
            <div class="col-md-4 bg-info mt-2">
              <div class="step">
                <h3>Kuota</h3>
                <p>Kuota XL, AXIS, TELKOMSEL, TRI, INDOSAT, By.U, SMARTFREN</p>
              </div>
            </div>
            <div class="col-md-4 bg-info mt-2">
              <div class="step">
                <h3>Token PLN</h3>
                <p>Token 20RB, 50RB, 100RB, dll</p>
              </div>
            </div>
            <div class="col-md-4 bg-info mt-2">
              <div class="step">
                <h3>Games</h3>
                <p>Game Mobile Legend, Clash Of Clans, PUBG, FREE FIRE</p>
              </div>
            </div>
            <div class="col-md-4 bg-info mt-2">
              <div class="step">
                <h3>PLN PRABAYAR</h3>
                <p>PLN PRABAYAR</p>
              </div>
            </div>
            <div class="col-md-4 bg-info mt-2">
              <div class="step">
                <h3>SMS/TELP</h3>
                <p>XL, AXIS, TELKOMSEL, TRI, INDOSAT, By.U, SMARTFREN</p>
              </div>
            </div>
            <div class="col-md-4 bg-info mt-2">
              <div class="step">
                <h3>Voucher</h3>
                <p>WiFi ID</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Pembayaran Section ======= -->
      <section class="section border-top border-bottom">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
              <h2 class="section-heading">Pembayaran</h2>
              <small>Pilih Metode Pembayaran Sesuai Keinginan Anda</small>
            </div>
          </div>
          <div class="row justify-content-center text-center row-cols-3">
            <div class="col-sm-1 mt-2">
              <div class="card card-body">
                <img
                  src="https://konterkuota.com/assets/payments/bank_bni.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-sm-1 mt-2">
              <div class="card card-body">
                <img
                  src="https://konterkuota.com/assets/payments/bank_bni.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-sm-1 mt-2">
              <div class="card card-body">
                <img
                  src="https://konterkuota.com/assets/payments/bank_bni.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-sm-1 mt-2">
              <div class="card card-body">
                <img
                  src="https://konterkuota.com/assets/payments/bank_bni.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-sm-1 mt-2">
              <div class="card card-body">
                <img
                  src="https://konterkuota.com/assets/payments/bank_bni.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-sm-1 mt-2">
              <div class="card card-body">
                <img
                  src="https://konterkuota.com/assets/payments/bank_bni.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-sm-1 mt-2">
              <div class="card card-body">
                <img
                  src="https://konterkuota.com/assets/payments/bank_bni.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-sm-1 mt-2">
              <div class="card card-body">
                <img
                  src="https://konterkuota.com/assets/payments/bank_bni.png"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= CTA Section ======= -->
      <section class="section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div
              class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0"
            >
              <h2>Download Aplikasi Android</h2>
            </div>
            <div class="col-md-5 text-center text-md-end">
              <p>    public function __construct()
                {
                    
                }
                <a onclick="download()" href="{{ route('download','digitalpelajar.apk') }}"
                  ><img src="https://konterkuota.com/assets/Android.png" alt=""
                /></a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End CTA Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h3>TPID</h3>
            <p>
              Isi Pulsa Dan Kuota Jadi Mudah Dan Murah.
            </p>
            <p class="col-sm-4">
              <a href="https://wa.me/62881022719245"><i class="bi bi-whatsapp"></i> 0881022719245</a
                ></a>
            </p>
          </div>
          <div class="col-md-7 ms-auto">
            <div class="row site-section pt-0">
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Dukungan</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Hubungi Kami</a></li>
                  <li><a href="#">Tanya Jawab</a></li>
                  <li><a href="#">Ketentuan Layanan</a></li>
                  <li><a href="#">Mendaftar</a></li>
                </ul>
              </div>
              <div class="col-md-4 mb-4 mb-md-0">
                <h3>Informasi Paket</h3>
                <ul class="list-unstyled">
                  <li><a href="#">XL</a></li>
                  <li><a href="#">TELKOMSEL</a></li>
                  <li><a href="#">INDOSAT</a></li>
                  <li><a href="#">TRI</a></li>
                </ul>
              </div>
              <!-- <div class="col-md-4 mb-4 mb-md-0">
                <h3>Downloads</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Get from the App Store</a></li>
                  <li><a href="#">Get from the Play Store</a></li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <p class="copyright">&copy; <?= date('Y');?> Copyright TPID. All Rights Reserved</p>
            <!-- <div class="credits"> -->
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            <!-- </div> -->
          </div>
        </div>
      </div>
    </footer>

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript">
        document.getElementById('download').style.display = 'none'
        function download(){
            document.getElementById('download').style.display = ''
            var url = window.location.href + 'download'
            window.location = url
        }
    </script>
  </body>
</html>