<!DOCTYPE html>
<html lang="en">

<head>
    <title>Health - Medical Website Template</title>
    <!--

    Template 2098 Health

    http://www.tooplate.com/view/2098-health

    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/owl.theme.default.min.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/tooplate-style.css') }}">
    <style>
        .fixed-navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }
    </style>
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <p>Selamat Datang Di Website Resmi Klinik Fahri 24 Jam</p>
                </div>
                <div class="col-md-8 col-sm-7 text-align-right">
                    <span class="phone-icon"><i class="fa fa-phone"></i> 0821-2343-9604</span>
                    <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 24 jam (Senin-Jumat)</span>
                    <span class="email-icon"><i class="fa fa-envelope-o"></i> <a
                            href="#">fahricenter@gmail.com</a></span>
                </div>
            </div>
        </div>
    </header>


    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top fixed-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <!-- LOGO TEXT HERE -->
                <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealthy Klinik Center</a>
            </div>
            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Route::has('login'))
                        @auth
                        <li>
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('login') }}">Log in</a>
                        </li>

                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Mari Kita Hidup Sehat </h3>
                                <h1>Pola Hidup yang Sehat</h1>
                                <a href="#team" class="section-btn btn btn-default smoothScroll">Kosultasi dengan Doket
                                    Profesional</a>
                            </div>
                        </div>
                    </div>
                    <div class="item item-second">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Mari Mulai Hidup Sehat Dari Sekarang</h3>
                                <h1>Gaya Hidup Sehat</h1>
                                <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Tentang
                                    Pelayanan Kami</a>
                            </div>
                        </div>
                    </div>
                    <div class="item item-third">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Manfaat Hidup Sehat</h3>
                                <h1>Manfaat Kesehatan Anda</h1>
                                <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Lebih Tau
                                    Tentang Kesehatan Anda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Fahri <i
                                class="fa fa-h-square"></i>ealth Center</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p>Klinik Kesehatan Fahri berdedikasi untuk memberikan pelayanan medis terbaik dengan
                                pendekatan yang profesional dan ramah.
                                Tim kami yang terdiri dari dokter dan tenaga medis berpengalaman siap membantu Anda
                                dalam menjaga dan meningkatkan kesehatan.</p>
                            <p>Layanan yang komprehensif, kami berkomitmen untuk menjadi mitra kesehatan Anda yang
                                terpercaya. Kesehatan Anda adalah prioritas utama kami.
                                Kunjungi Klinik Kesehatan Fahri dan rasakan perbedaannya.</p>
                        </div>
                        <figure class="profile wow fadeInUp" data-wow-delay="1s">
                            <img src="{{ asset('landing/images/dokter-about.jpg') }}" class="img-responsive" alt="">
                            <figcaption>
                                <h3>Dr. Oky Pratama Dipl. AAAM.</h3>
                                <p>Manager Fahri Heakthy Center</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Dokter Kami</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('landing/images/dokter-1.jpg') }}" class="img-responsive center-block"
                            alt="">
                        <div class="team-info text-center">
                            <h5>Dr. Nicho Saputra Nugraha</h5>
                            <p>Dokter Spesialis Anak</p>
                            <br>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 0823-0900-0197</p>
                                <p><i class="fa fa-envelope-o"></i> <a
                                        href="mailto:nichonughraha@gmail.com">nichonughraha@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                <li><a href="mailto:nichonughraha@gmail.com" class="fa fa-envelope-o"></a></li>
                                <li><a href="#" class="fa fa-flickr"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('landing/images/dokter-2.jpeg') }}" class="img-responsive center-block"
                            alt="">
                        <div class="team-info text-center">
                            <h5>Dr. Ahhmad Nabhan</h5>
                            <p>Spesialis Kandungan</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 0812-8488-8239</p>
                                <p><i class="fa fa-envelope-o"></i> <a
                                        href="mailto:ahnabhan@gmail.com">ahnabhan@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-facebook-square"></a></li>
                                <li><a href="mailto:ahnabhan@gmail.com" class="fa fa-envelope-o"></a></li>
                                <li><a href="#" class="fa fa-flickr"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{ asset('landing/images/dokter-3.jpg') }}" class="img-responsive center-block"
                            alt="">
                        <div class="team-info text-center">
                            <h5>Dr. Estelita liana</h5>
                            <p>Spesialis Penyakit Dalam</p>
                            <br>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 0891-0008-6381</p>
                                <p><i class="fa fa-envelope-o"></i> <a
                                        href="mailto:indahksma@gmail.com">esteliana@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="mailto:indahksma@gmail.com" class="fa fa-envelope-o"></a></li>
                                <li><a href="#" class="fa fa-flickr"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS -->
    <section id="news" data-stellar-background-ratio="2.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Informasi Lainya</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="news-detail.html">
                            <img src="{{asset('landing/images/pages-1.jpg')}}" class="img-responsive" width="130% alt="">
                              </a>
                              <div class=" news-info">
                            <span>19/06/2024</span>
                            <h3><a href="news-detail.html">Teknologi yang sangat memadai</a></h3>
                            <p>Tentunya rumah sakit kami mempunyai teknologi yang sangat memadai untuk layanan
                                kesehatan.</p>
                            <div class="author">
                                <img src="{{asset('landing/images/core-1.jpg')}}" class="img-responsive" alt="">
                                <div class="author-info">
                                    <h5>Ahmad Baihaqi</h5>
                                    <p>Ceo Fahri Healthy</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <a href="news-detail.html">
                        <img src="{{asset('landing/images/pages-2.jpg')}}" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>19/06/2024</span>
                        <h4><a href="news-detail.html">Proses Pengobatan Terbaru</a></h4>
                        <p>Kami memperkenalkan metode yang inovatif untuk meningkatkan proses pemulihan yang efektif.
                        </p>
                        <div class="author">
                            <img src="{{asset('landing/images/core-2.webp')}}" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Annisa Nur Karimah</h5>
                                <p>Director Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                    <a href="news-detail.html">
                        <img src="{{asset('landing/images/pages-3.jpg')}}" class="img-responsive" width="90%" alt="">
                    </a>
                    <div class="news-info">
                        <span>19/06/2024</span>
                        <h3><a href="news-detail.html">Rutinitas Penelitian Medis Terkini</a></h3>
                        <p>Ulasan tahunan tentang penelitian medis yang mencakup temuan yang terbaru dan temuan penting
                            dalam dunia kedokteran.</p>
                        <div class="author">
                            <img src="{{asset('landing/images/core-3.jpg')}}" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Herbanius Andriawan</h5>
                                <p>Manager Labolatorium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <img src="{{ asset('landing/images/appointment-image.jpg') }}" class="img-responsive" alt="">
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="#">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Janji Temu Dengan Dokter</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="Masukan Email"
                                    placeholder="Your Email">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="date">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="date" name="Tanggal Lahir">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label for="select">Pilih Layanan</label>
                                <select class="form-control" id="select" name="Pilih">
                                    <option>--Silahkan Pilih Layanan--</option>
                                    <option>Poli Umum</option>
                                    <option>Poli Gigi</option>
                                    <option>Poli Anak</option>
                                    <option>Radiologi</option>
                                    <option>Ahli Jantung</option>
                                    <option>Ahli Bedah</option>
                                    <option>Poli THT</option>
                                    <option>Ginekologi</option>
                                    <option>Orthopedi</option>
                                    <option>Psikiatri</option>
                                </select>

                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="telephone" name="phone"
                                    placeholder="Masukan Nomor Telepon Aktif">
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- GOOGLE MAP -->
    <section id="google-map">
        <!-- How to change your own map point
                1. Go to Google Maps
                2. Click on your location point
                3. Click "Share" and choose "Embed map" tab
                4. Copy only URL and paste it within the src="" field below
        -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15857.11964779766!2d106.78976042008495!3d-6.486193675565425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c21a612790cb%3A0x1c00c5eb51c82910!2sBojonggede%2C%20Kecamatan%20Bojonggede%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016922!5e0!3m2!1sid!2sid!4v1718733780283!5m2!1sid!2sid"
            height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </section>

    <!-- FOOTER -->
    <!-- FOOTER -->
    <footer data-stellar-background-ratio="5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Call Center</h4>
                        <p>Perumahan Bukit Waringin Blok I 1 No.27 RT 006/014, Kecamatan Bojonggede, Kabupaten Bogor</p>
                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i> 0821-2343-9604</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">Fahricenter@gmail.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s"> Topik Ter-update</h4>
                        <div class="latest-stories">
                            <div class="stories-image">
                                <a href="#"><img src="{{asset('landing/images/tc-1.jpg')}}" class="img-responsive"
                                        alt=""></a>
                            </div>
                            <div class="stories-info">
                                <a href="#">
                                    <h5>Teknologi Terbaru</h5>
                                </a>
                                <span>19/06/2024</span>
                            </div>
                        </div>

                        <div class="latest-stories">
                            <div class="stories-image">
                                <a href="#"><img src="{{asset('landing/images/tc-2.jpg')}}" class="img-responsive"
                                        alt=""></a>
                            </div>
                            <div class="stories-info">
                                <a href="#">
                                    <h5>Proses Penyembuhan Terbaru</h5>
                                </a>
                                <span>19/06/2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb">
                        <div class="opening-hours">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Jam Operasional</h4>
                            <p>Senin - Jumat <span>24 Jam</span></p>
                            <p>Saturday & Sunday <span>088:00 AM - 00:00 PM</span></p>
                        </div>

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square"
                                    attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024 Website Resmi Klinik Fahrii 24 Jam
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-link">
                            <a href="#">Tes Labolatorium</a>
                            <a href="#">Departemen</a>
                            <a href="#">Asuransi Kesehatan</a>
                            <a href="#">Karir</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 text-align-center">
                        <div class="angle-up-btn">
                            <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                    class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>



    <script src="{{ asset('landing/js/jquery.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('landing/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('landing/js/custom.js') }}"></script>

</body>

</html>