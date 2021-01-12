<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Melancong Wisata</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('Delicious/assets/img/logo-1.png') }}" rel="icon">
    <link href="{{ url('Delicious/assets/img/logo-1.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('Delicious/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ url('Delicious/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('Delicious/assets/css/style.css') }}" rel="stylesheet">

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
            <i class="icofont-phone"></i> +62 813 6591 6997
            <i class="icofont-email"></i> Melancongwisata@gmail.com
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <a href="index.html"><img src="{{ url('Delicious/assets/img/logo.ico') }}" alt="" class="img-fluid"></a>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#menu">Layanan</a></li>
                    <li><a href="#events">Portofolio</a></li>
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
                    <div class="carousel-item active" style="background: url(Delicious/assets/img/slide/slide-1.jpg);">
                        <div class="carousel-background"><img src="{{ url('Delicious/assets/img/slide/slide-1.jpg') }}"
                                style="width:100%" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><span>Melancong</span> Wisata</h2>
                                <p class="animate__animated animate__fadeInUp">Melancong Wisata Travel merupakan sebuah
                                    perusahaan Tour and Travel yang akan selalu menemani kamu dalam menikmati
                                    Liburan/Traveling </p>
                                <div>
                                    <a href="#menu"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Layanan Kami</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Lakukan
                                        Pemesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg);">
                        <div class="carousel-background"><img src="{{ url('Delicious/assets/img/slide/slide-2.jpg') }}"
                                style="width:100%" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><span>Pemesanan</span> Tiket Pesawat
                                </h2>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <div>
                                    <a href="#menu"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Layanan Kami</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Lakukan
                                        Pemesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background: url(assets/img/slide/slide-3.jpg);">
                        <div class="carousel-background"><img src="{{ url('Delicious/assets/img/slide/slide-3.jpg') }}"
                                style="width:100%" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><span>Paket</span> Tour Wisata</h2>
                                <p class="animate__animated animate__fadeInUp"></p>
                                <div>
                                    <a href="#menu"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Layanan Kami</a>
                                    <a href="#book-a-table"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Lakukan
                                        Pemesanan</a>
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
                        <img src="{{ url('Delicious/assets/img/about.jpg') }}" style="width:100%" alt="">
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="content">
                            <h3>Tentang<strong>Kami</strong></h3>
                            <p>
                                Melancong Wisata Travel merupakan sebuah perusahaan Tour and Travel yang menyediakan
                                layanan berupa :
                            </p>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Penjualan tiket pesawat</li>
                                <li><i class="bx bx-check-double"></i> Penjualan tiket keret api</li>
                                <li><i class="bx bx-check-double"></i> Booking hotel</li>
                                <li><i class="bx bx-check-double"></i> Penjualan tiker pelni</li>
                                <li><i class="bx bx-check-double"></i> Serta transaksi lainnya</li>
                            </ul>
                            <p>
                                Kami juga menyediakan bagi anda pelayanan berupa penyewaan bus pariwisata dan paket tour
                                wisata dalam negeri maupun luar negeri
                            </p>
                            <p class="font-italic">
                                Mari bergabung bersama kami
                            </p>
                            <p class="font-italic">
                                Get New Experience With Us
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
                    <h2>Kenapa Memilih<span> Melancong Wisata</span></h2>
                </div>
                <div class="owl-carousel events-carousel">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="box">
                                <span>01</span>
                                <h4>Pencarian Tiket Lengkap</h4>
                                <p>Mencari dan membandingkan harga dan promo tiket pesawat maskapai penerbangan
                                    nasional.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>02</span>
                                <h4>Terjamin Keamanan</h4>
                                <p>Data pribadi dan pesanan Anda terjamin keamanannya di server kami (HTTPS).</p>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-4 mt-lg-0">
                            <div class="box">
                                <span>03</span>
                                <h4>Harga Sudah Termasuk Pajak</h4>
                                <p>Harga yang ditampilkan sudah termasuk pajak, Iuran Wajib Jasa Raharja, & fuel
                                    surcharge.</p>
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
                            <li data-filter=".filter-mobil">Rental Mobil</li>
                            <li data-filter=".filter-bus">Bus Pariwisata</li>
                            <li data-filter=".filter-paket">Paket Wisata</li>
                        </ul>
                    </div>
                </div>

                <div class="row menu-container">

                    <div class="col-lg-6 menu-item filter-mobil">
                        <div class="menu-content">
                            <a href="#">CGK - BTH</a><span>IDR 1.719.000</span>
                        </div>
                        <div class="menu-ingredients">
                            Garuda | GA 152 | Senin, 27 Juli 2020
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-mobil">
                        <div class="menu-content">
                            <a href="#">DPS - JOG</a><span>IDR 1.082.400</span>
                        </div>
                        <div class="menu-ingredients">
                            Lion | JT 805 | Minggu, 13 September 2020
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-mobil">
                        <div class="menu-content">
                            <a href="#">JOG - UPG</a><span>IDR 1.615.900</span>
                        </div>
                        <div class="menu-ingredients">
                            Garuda | GA 667 | Minggu, 26 Juli 2020
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-mobil">
                        <div class="menu-content">
                            <a href="#">KNO - SUB</a><span>IDR 3.047.000</span>
                        </div>
                        <div class="menu-ingredients">
                            Garuda | GA 193 | Minggu, 02 Agustus 2020
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-mobil">
                        <div class="menu-content">
                            <a href="#">SUB - KNO</a><span>IDR 3.362.600</span>
                        </div>
                        <div class="menu-ingredients">
                            Garuda | GA 323 | Selasa, 28 Juli 2020
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-mobil">
                        <div class="menu-content">
                            <a href="#">PNK - CGK</a><span>IDR 456.000</span>
                        </div>
                        <div class="menu-ingredients">
                            Lion | JT 711 | Sabtu, 08 Agustus 2020
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-paket">
                        <div class="menu-content">
                            <a href="#">Paket Liburan Korea</a><span>IDR 24.999.900</span>
                        </div>
                        <div class="menu-ingredients">
                            1 Minggu | Minggu, 02 Agustus 2020
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-bus">
                        <div class="menu-content">
                            <a href="#">Tour Keliling Indonesia</a><span>IDR 19.990.000</span>
                        </div>
                        <div class="menu-ingredients">
                            1 Minggu | Minggu, 16 Agustus 2020
                        </div>
                    </div>

                    <div class="col-lg-6 menu-item filter-paket">
                        <div class="menu-content">
                            <a href="#">Paket Liburan Singapura</a><span>IDR 9.590.000</span>
                        </div>
                        <div class="menu-ingredients">
                            5 Hari | Sabtu, 25 Juli 2020
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container">

                <div class="section-title">
                    <h2><span>Portofolio</span></h2>
                </div>

                <div class="owl-carousel events-carousel">

                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="{{ url('Delicious/assets/img/event-birthday.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Birthday Parties</h3>
                            <div class="price">
                                <p><span>$189</span></p>
                            </div>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>

                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="{{ url('Delicious/assets/img/event-private.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Private Parties</h3>
                            <div class="price">
                                <p><span>$290</span></p>
                            </div>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>

                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="{{ url('Delicious/assets/img/event-custom.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>Custom Parties</h3>
                            <div class="price">
                                <p><span>$99</span></p>
                            </div>
                            <p class="font-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Events Section -->

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container">

                <div class="section-title">
                    <h2>Lakukan<span> Pemesanan</span></h2>
                </div>

                <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="date" class="form-control" id="date" placeholder="Date"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" class="form-control" name="time" id="time" placeholder="Time"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="number" class="form-control" name="people" id="people"
                                placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your booking request was sent. We will call back or send an Email to
                            confirm your reservation. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>

            </div>
        </section><!-- End Book A Table Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">

                <div class="section-title">
                    <h2>Galeri<span> Melancong Wisata</span></h2>
                    <p>Beberapa foto dari Melancong Wisata yang akan selalu menemani liburan anda.</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ url('Delicious/assets/img/gallery/gallery-1.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ url('Delicious/assets/img/gallery/gallery-1.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ url('Delicious/assets/img/gallery/gallery-2.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ url('Delicious/assets/img/gallery/gallery-2.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ url('Delicious/assets/img/gallery/gallery-3.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ url('Delicious/assets/img/gallery/gallery-3.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ url('Delicious/assets/img/gallery/gallery-4.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ url('Delicious/assets/img/gallery/gallery-4.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ url('Delicious/assets/img/gallery/gallery-5.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ url('Delicious/assets/img/gallery/gallery-5.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ url('Delicious/assets/img/gallery/gallery-6.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ url('Delicious/assets/img/gallery/gallery-6.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ url('Delicious/assets/img/gallery/gallery-7.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ url('Delicious/assets/img/gallery/gallery-7.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ url('Delicious/assets/img/gallery/gallery-8.jpg') }}" class="venobox"
                                data-gall="gallery-item">
                                <img src="{{ url('Delicious/assets/img/gallery/gallery-8.jpg') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <img src="{{ url('Delicious/assets/img/testimonials/testimonials-1.jpg') }}"
                            class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{ url('Delicious/assets/img/testimonials/testimonials-2.jpg') }}"
                            class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                            eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                            culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{ url('Delicious/assets/img/testimonials/testimonials-3.jpg') }}"
                            class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{ url('Delicious/assets/img/testimonials/testimonials-4.jpg') }}"
                            class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                            veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="{{ url('Delicious/assets/img/testimonials/testimonials-5.jpg') }}"
                            class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                            nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><span>Kontak</span> Kami</h2>
                    <p>Silahkan hubungi kami untuk pemesanan tiket atau tour liburan. atau bisa juga dengan cara
                        mengirimi kami email</p>
                </div>
            </div>
            <div class="container mt-5">

                <div class="info-wrap">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
                            <i class="icofont-envelope"></i>
                            <h4>E-mail:</h4>
                            <p>MelancongWisata@gmail.com</p>
                        </div>

                        <div class="col-lg-6 col-md-6 info mt-4 mt-lg-0">
                            <i class="icofont-phone"></i>
                            <h4>Telepon:</h4>
                            <p>+62 813 6591 6997</p>
                        </div>
                    </div>
                </div>

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Kirim</button></div>
                </form>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Melancong Wisata</h3>
            <p>MelancongWisataTravel menyajikan informasi terkini untuk perjalanan wisata Anda, lengkap dengan daftar
                harga tiket pesawat murah.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
    <script src="{{ url('Delicious/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('Delicious/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('Delicious/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ url('Delicious/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('Delicious/assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ url('Delicious/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('Delicious/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ url('Delicious/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('Delicious/assets/js/main.js') }}"></script>

</body>

</html>
