<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Melancong Wisata</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('Delicious/assets/img/logo-1.png')}}" rel="icon">
    <link href="{{ url('Delicious/assets/img/logo-1.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('Delicious/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('Delicious/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
        <div class="container text-right">
            <i class="icofont-phone"></i> {{ $profil[0]->telepon }}
            <i class="icofont-email"></i> {{ $profil[0]->email }}
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <a href="index.html"><img src="{{ url('Delicious/assets/img/logo.ico')}}" alt="" class="img-fluid"></a>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#menu">Layanan</a></li>\
                    <li><a href="#gallery">Galeri</a></li>
                    <li><a href="#contact">Kontak</a></li>

                    <li class="book-a-table text-center"><a href="#book-a-table">Lakukan Pemesanan</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background: url(data/jumbotron/{{ $jumbotron[0]->foto }});">
                        <div class="carousel-background"><img src="{{ url('data/jumbotron/'.$jumbotron[0]->foto)}}" style="width:100%" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                @php
                                $bagi = explode(" ", $jumbotron[0]->judul);
                                $judul1 = $bagi[0];
                                unset($bagi[0]);
                                $judul2 = implode(" ", $bagi);
                                @endphp
                                <h2 class="animate__animated animate__fadeInDown"><span>{{ $judul1 }}</span> {{ $judul2 }}</h2>
                            <p class="animate__animated animate__fadeInUp">{{ $jumbotron[0]->kata }}</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Layanan Kami</a>
                                    <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Lakukan Pemesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background: url(data/jumbotron/{{ $jumbotron[1]->foto }});">
                        <div class="carousel-background"><img src="{{ url('data/jumbotron/'.$jumbotron[1]->foto)}}" style="width:100%" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                @php
                                $bagi = explode(" ", $jumbotron[1]->judul);
                                $judul1 = $bagi[0];
                                unset($bagi[0]);
                                $judul2 = implode(" ", $bagi);
                                @endphp
                                <h2 class="animate__animated animate__fadeInDown"><span>{{ $judul1 }}</span> {{ $judul2 }}</h2>
                                <p class="animate__animated animate__fadeInUp">{{ $jumbotron[1]->kata }}</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Layanan Kami</a>
                                    <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Lakukan Pemesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background: url(data/jumbotron/{{ $jumbotron[2]->foto }});">
                        <div class="carousel-background"><img src="{{ url('data/jumbotron/'.$jumbotron[2]->foto)}}" style="width:100%" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                @php
                                $bagi = explode(" ", $jumbotron[2]->judul);
                                $judul1 = $bagi[0];
                                unset($bagi[0]);
                                $judul2 = implode(" ", $bagi);
                                @endphp
                                <h2 class="animate__animated animate__fadeInDown"><span>{{ $judul1 }}</span> {{ $judul2 }}</h2>
                                <p class="animate__animated animate__fadeInUp">{{ $jumbotron[2]->kata }}</p>
                                <div>
                                    <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Layanan Kami</a>
                                    <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Lakukan Pemesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch" style='width:100%;'>
                        <img src="{{ url('data/about/'.$profil[0]->foto)}}" style="width:100%" alt="">
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>Tentang<strong>Kami</strong></h3>
                            <p>
                                @php print_r($profil[0]->about_us); @endphp
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Whu Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="section-title">
                    <h2>Layanan<span> Melancong Wisata</span></h2>
                </div>
                <div class="owl-carousel events-carousel">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="box">
                                <span>01</span>
                                <h4>Paket Wisata</h4>
                                <p>Mencari dan membandingkan harga dan promo tiket pesawat maskapai penerbangan nasional.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>02</span>
                                <h4>Bus Pariwisata</h4>
                                <p>Data pribadi dan pesanan Anda terjamin keamanannya di server kami (HTTPS).</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>03</span>
                                <h4>Rental Mobil</h4>
                                <p>Harga yang ditampilkan sudah termasuk pajak, Iuran Wajib Jasa Raharja, & fuel surcharge.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Whu Us Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container">

                <div class="section-title">
                    <h2>Beberapa Layanan <span> Favorit Kami</span></h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">Semua</li>
                            <li data-filter=".1">Rental Mobil</li>
                            <li data-filter=".2">Bus Pariwisata</li>
                            <li data-filter=".3">Paket Wisata</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container">
                    @foreach($layanan as $layanan):
                    <div class="col-lg-6 menu-item {{ $layanan->jenis_layanan }}">
                        <div class="menu-content">
                        <a href="#">{{ $layanan->nama_layanan }}</a><span>{{ $layanan->harga }}</span>
                        </div>
                        <div class="menu-ingredients">
                            {{ $layanan->keterangan }}
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Galeri<span> Melancong Wisata</span></h2>
                    <p>Beberapa foto dari Melancong Wisata yang akan selalu menemani liburan anda.</p>
                </div>

                <div class="row no-gutters">
                    @foreach($galeri as $galeri)
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            @if($galeri->tipe == 1)
                            <a href="{{ url('data/galeri/'.$galeri->foto)}}" data-gall="gallery-item">
                                <img src="{{ url('data/galeri/'.$galeri->foto)}}" style="width: 400px; height:280;" alt="">
                            </a>
                            @endif
                            @if($galeri->tipe == 2)
                            <a href="#" class="venobox" data-gall="gallery-item">
                                <iframe width="400" height="280" src="{{ $galeri->foto }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="owl-carousel testimonials-carousel">
                    @foreach($response as $response):
                    <div class="testimonial-item">
                        <img src="{{ url('data/respon/'.$response->foto)}}" class="testimonial-img" alt="">
                        <h3>{{ $response->nama }}</h3>
                        <h4>{{ $response->pekerjaan }}</h4>
                        <div class="stars">
                            @for($a = 0; $a < $response->bintang; $a++)
                            <i class="icofont-star"></i>
                            @endfor
                        </div>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{ $response->komentar }}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><span>Kontak</span> Kami</h2>
                    <p>Silahkan hubungi kami untuk pemesanan tiket atau tour liburan. atau bisa juga dengan cara mengirimi kami email</p>
                </div>
            </div>
            <div class="container mt-5">

                <div class="info-wrap">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
                            <a href="https://mailto:{{ $profil[0]->email }}"><i class="icofont-envelope"></i></a>

                            <h4>E-mail:</h4>
                            <p>{{ $profil[0]->email }}</p>
                        </div>

                        <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
                            <i class="icofont-phone"></i>
                            <h4>Telepon:</h4>
                            <p>{{ $profil[0]->telepon }}</p>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Melancong Wisata</h3>
            <p>MelancongWisataTravel menyajikan informasi terkini untuk perjalanan wisata Anda, lengkap dengan daftar harga tiket pesawat murah.</p>
            <div class="social-links">
                <a href="{{ $profil[0]->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{ $profil[0]->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ $profil[0]->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{ $profil[0]->youtube }}" class="google-plus"><i class="bx bxl-youtube"></i></a>
                <a href="{{ $profil[0]->whatsapp }}" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
            </div>
            <div class="copyright">
                Melancong Wisata ©<strong><span> 2020. </span></strong>All Right Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Custom by DKing
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('Delicious/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('Delicious/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('Delicious/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ url('Delicious/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ url('Delicious/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
    <script src="{{ url('Delicious/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ url('Delicious/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{ url('Delicious/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('Delicious/assets/js/main.js')}}"></script>

</body>

</html>
