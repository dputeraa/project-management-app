<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>ProjeXcellence</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-pma.png') }}">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('index/css/bootstrap.css') }}" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('index/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('index/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('images/logo-pma.png') }}" alt="" />
                        <span>
                            ProjeXcellence
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#category"> Category </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#information">Information </a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="{{ route('login') }}">
                                <span>
                                    Login
                                </span>
                            </a>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="custom_menu-btn ">
                            <button>
                                <span class=" s-1">

                                </span>
                                <span class="s-2">

                                </span>
                                <span class="s-3">

                                </span>
                            </button>
                        </div>
                    </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section" id="home">
            <div class="carousel_btn-container">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5 offset-md-1">
                                    <div class="detail-box">
                                        <h1>
                                            Selamat datang di ProjeXcellence
                                        </h1>
                                        <p>
                                            Solusi Terbaik untuk Manajemen Proyek Anda. Dengan fitur-fitur inovatif,
                                            kami hadir untuk membuat
                                            setiap langkah proyek Anda lebih mudah dan efisien.
                                        </p>
                                        <div class="btn-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-md-1 col-md-4 img-container">
                                    <div class="img-box">
                                        <img src="{{ asset('index/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5 offset-md-1">
                                    <div class="detail-box">
                                        <h1>
                                            Optimalkan produktivitas tim Anda dengan ProjeXcellence
                                        </h1>
                                        <p>
                                            Dengan tampilan yang intuitif dan fitur kolaboratif, kami memastikan
                                            proyek-proyek Anda berjalan
                                            sesuai rencana.
                                        </p>
                                        <div class="btn-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-md-1 col-md-4 img-container">
                                    <div class="img-box">
                                        <img src="{{ asset('index/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5 offset-md-1">
                                    <div class="detail-box">
                                        <h1>
                                            Pantau kemajuan proyek Anda dari mana saja dengan ProjeXcellence
                                        </h1>
                                        <p>
                                            Kelola tugas, sumber daya, dan waktu dengan mudah untuk mencapai tujuan
                                            proyek tanpa hambatan.
                                        </p>
                                        <div class="btn-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="offset-md-1 col-md-4 img-container">
                                    <div class="img-box">
                                        <img src="{{ asset('index/images/slider-img.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- experience section -->

    <section class="experience_section layout_padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="img-box">
                        <img src="{{ asset('index/images/experience-img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Mengelola Proyek dengan Mudah
                            </h2>
                        </div>
                        <p>
                            ProjeXcellence memberikan kemudahan dalam merencanakan, melacak, dan menyelesaikan
                            proyek-proyek Anda.
                            Dari penugasan tugas hingga analisis progres, kami hadir untuk membuat pengelolaan proyek
                            menjadi
                            pengalaman yang lebih efisien.
                        </p>
                        <div class="btn-box">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end experience section -->

    <!-- category section -->

    <section class="category_section layout_padding" id="category">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Category
                </h2>
            </div>
            <div class="category_container">
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('index/images/c1.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Design & Arts
                        </h5>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('index/images/c2.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Web Development
                        </h5>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('index/images/c3.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            SEO Markting
                        </h5>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('index/images/c4.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Video Edting
                        </h5>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('index/images/c5.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Logo Design
                        </h5>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="{{ asset('index/images/c6.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Game Design
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end category section -->

    <!-- about section -->

    <section class="about_section layout_padding" id="information">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-9 mx-auto">
                    <div class="img-box">
                        <img src="{{ asset('index/images/about-img.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="detail-box">
                <h2>
                    About Project Management App
                </h2>
                <p>
                    ProjeXcellence adalah solusi terdepan dalam manajemen proyek, dirancang untuk membantu tim dan
                    perusahaan
                    mengelola proyek dengan lebih efisien dan produktif. Dengan fitur-fitur inovatif dan antarmuka yang
                    intuitif,
                    ProjeXcellence menyediakan solusi yang komprehensif untuk setiap tahap proyek.
                </p>
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- end about section -->
    <!-- info section -->

    <section class="info_section ">
        <div class="info_container layout_padding-top">
            <div class="container">
                <div class="info_top">
                    <div class="info_logo">
                        <img src="{{ asset('index/images/logo.png') }}" alt="" />
                        <span>
                            Spering
                        </span>
                    </div>
                    <div class="social_box">
                        <a href="#">
                            <img src="{{ asset('index/images/fb.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('index/images/twitter.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('index/images/linkedin.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('index/images/instagram.png') }}" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('index/images/youtube.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="info_main">
                    <div class="row">
                        <div class="col-md-3 col-lg-2">
                            <div class="info_link-box">
                                <h5>
                                    Useful Link
                                </h5>
                                <ul>
                                    <li class=" active">
                                        <a class="" href="index.html">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="">
                                        <a class="" href="about.html">About </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="work.html">Work </a>
                                    </li>
                                    <li class="">
                                        <a class="" href="category.html">Category </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <h5>
                                Offices
                            </h5>
                            <p>
                                Readable content of a page when looking at its layoutreadable content of a page when
                                looking at its
                                layout
                            </p>
                        </div>

                        <div class="col-md-3 col-lg-2 offset-lg-1">
                            <h5>
                                Information
                            </h5>
                            <p>
                                Readable content of a page when looking at its layoutreadable content of a page when
                                looking at its
                                layout
                            </p>
                        </div>

                        <div class="col-md-3  offset-lg-1">
                            <div class="info_form ">
                                <h5>
                                    Newsletter
                                </h5>
                                <form action="">
                                    <input type="email" placeholder="Email">
                                    <button>
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-md-10 mx-auto">
                        <div class="info_contact layout_padding2">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#" class="link-box">
                                        <div class="img-box">
                                            <img src="{{ asset('index/images/location.png') }}" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h6>
                                                Location
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="link-box">
                                        <div class="img-box">
                                            <img src="{{ asset('index/images/mail.png') }}" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h6>
                                                demo@gmail.com
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <a href="#" class="link-box">
                                        <div class="img-box">
                                            <img src="{{ asset('index/images/call.png') }}" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h6>
                                                Call +01 1234567890
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; <span id="displayDate"></span> ProjeXcellence Project Management App
                <a href="https://dputeraa.github.io/danielputeraalamsyah.github.io/">by Daniel Putera Alamsyah</a>
            </p>
        </div>
    </footer>
    <!-- end  footer section -->


    <script src="{{ asset('index/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('index/js/bootstrap.js') }}"></script>
    <script src="{{ asset('index/js/custom.js') }}"></script>


</body>
</body>

</html>
