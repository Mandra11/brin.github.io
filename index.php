<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Layanan Kearsipan Yogyakarta</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="https://time.is/id/" class="color_fff fh5co_mediya_setting">
                        <script language="JavaScript">
                            var tanggallengkap = new String();
                            var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
                            namahari = namahari.split(" ");
                            var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
                            namabulan = namabulan.split(" ");
                            var tgl = new Date();
                            var hari = tgl.getDay();
                            var tanggal = tgl.getDate();
                            var bulan = tgl.getMonth();
                            var tahun = tgl.getFullYear();
                            tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
                        </script>

                        <span id='jam'></span>
                        <script language='JavaScript'>document.write(tanggallengkap);</script>
                        <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#"
                                class="treding_btn">Trending</a>
                            <div class="fh5co_treding_position_absolute"></div>
                        </div>
                        <a href="#" class="color_fff fh5co_mediya_setting">Layanan Sistem Informasi Kearsipan
                            Yogyakarta</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <img src="images/Logo BRIN_Lanscape_Colour.png" alt="img" class="fh5co_logo_width" />
                </div>
                <div class="text-center d-inline-block" style="margin-top: 30px; margin-left:230px">
                    <form action="pencarian.php" enctype="multipart" method="GET">
                        <div class="text-center d-inline-block">
                            <input type="text" placeholder="Search" name="cari">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="fa-icon" style="margin-top: 23px; margin-left: 20px;">
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a>
                    </div>

                   
     <div class="d-inline-block text-center dd_position_relative">
  <select class="form-control fh5co_text_select_option" onchange="redirectOnSelect(this)">
    <option>Guest</option>
    <option>Login</option>
  </select>
</div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <a class="navbar-brand" href="#"><img src="img/Logo BRIN_Lanscape_Colour.png" alt="img"
                        class="mobile_logo_width" /></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="layanan.php">Layanan <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="single.php">Profil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="blog.php">Berita&Opini <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Galeri <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="foto.php">Foto</a>
                                <a class="dropdown-item" href="vidio.php">Video</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Lainya <span
                                    class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="penelitian.php">E-Arsip Penelitian</a>
                                <a class="dropdown-item" href="akun.php">Akun Saya</a>
                                <a class="dropdown-item" href="Contact_us.php">Hubungi Kami</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-left:200px;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style=" width:1090px; height:500px;">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/FOTOteamkearsipan.jpeg" alt="First slide"
                    style=" width:350px; height:500px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Proker.png" alt="Second slide"
                    style=" width:350px; height:500px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/STRUKTUR ORGANISASI_page-0001.jpg" alt="Third slide"
                    style=" width:350px; height:500px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/pemusnahanarsip.jpeg" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita1.php" class="text-white">Pemusnahan Arsip Tahap 1</a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/kunjunganugm.png" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita2.php" class="text-white"> Layanan Arsip Kawasan Yogyakarta Studi Banding ke
                                Arsip UGM </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/kunjunganarsipkarangsambung.jpg" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita3.php" class="text-white"> Kunjungan Team Layanan Kearsipan Karangsambung
                                Kebumen</a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/kunjungankedinasperpustakaanasrip.jpg" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita4.php" class="text-white">Kunjungan Layanan Arsip Yogyakarta Ke Dinas Perpustakaan Dan Arsip Daerah

</a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - March 7,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="images/kunjunganarsipkarangsambung.jpg" alt=""
                                class="fh5co_img_special_relative" /></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="berita3.php" class="text-white"> Kunjungan Team Layanan Kearsipan Karangsambung
                                Kebumen </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta - March 7,2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/kunjunganugm.png" alt="" /></div>
                        <div>
                            <a href="berita2.php" class="d-block fh5co_small_post_heading"><span class="">Layanan Arsip Kawasan Yogyakarta Studi Banding
                                Kearsipan UGM</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/pemusnahanarsip.jpeg" alt="" /></div>
                        <div>
                            <a href="berita1.php" class="d-block fh5co_small_post_heading"><span class="">Pemusnahan
                                    Arsip Tahap 1</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/kunjunganarsipkarangsambung.jpg" alt="" /></div>
                        <div>
                            <a href="berita3.php" class="d-block fh5co_small_post_heading"><span class="">Kunjungan Team
                                    Layanan Kearsipan Karangsambung Kebumen </span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><img src="images/kunjungankedinasperpustakaanasrip.jpg" alt="" /></div>
                        <div>
                            <a href="berita4.php" class="d-block fh5co_small_post_heading"><span class="">Kunjungan Layanan Arsip Yogyakarta Ke Dinas Perpustakaan Dan Arsip Daerah</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_video_news_bg pb-4">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video</div>
            </div>
            <div>
                <div class="owl-carousel owl-theme" id="slider3">
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                <iframe width="300" height="215" src="https://www.youtube.com/embed/AQwmLz_BIZ8?si=3SoU4i7uI5iRriMW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                    <img src="images/" width="300" height="215" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide"
                                    id="play-video">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 funniest videos on YouTube </span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                <iframe width="300" height="215" src="https://www.youtube.com/embed/RuoKWTSOayg?si=eVntsuuech0u5JHF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                    <img src="images/" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2"
                                    id="play-video_2">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 embedded YouTube videos this month</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                <iframe width="300" height="215" src="https://www.youtube.com/embed/2Gi523pc0ek?si=EZsf4GAskSUYONIn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                    <img src="images/" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3"
                                    id="play-video_3">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 best computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                <iframe width="300" height="215" src="https://www.youtube.com/embed/2Gi523pc0ek?si=EZsf4GAskSUYONIn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                    <img src="images/" alt="" />
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4"
                                    id="play-video_4">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                    <span class="">The top 10 best computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="images/pemusnahanarsip.jpeg" alt="" /></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <a href="single.php" class="fh5co_magna py-2"> Pemusnahan Arsip Tahap 1
                                . </a> <a href="single.php" class="fh5co_mini_time py-3"> Layanan Sistem Informasi
                                Kearsipan Yogyakarta -
                                April 18,2016 </a>
                            <div class="fh5co_consectetur"> Pada
                                hari Senin, tanggal 11 Maret 2023, Tim Layanan Arsip Kawasan Yogyakarta Badan Riset dan
                                Inovasi Nasional
                                menyaksikan proses pemusnahan arsip tahap 1 yang dilaksanakan oleh pihak ke tiga, UD
                                Sregep.
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="images/kunjunganugm.png" alt="" /></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <a href="single.php" class="fh5co_magna py-2"> Layanan Arsip Kawasan Yogyakarta Studi
                                Banding Kearsipan UGM.
                            </a> <a href="#" class="fh5co_mini_time py-3"> Layanan Sistem Informasi Kearsipan Yogyakarta
                                -
                                April 18,2016 </a>
                            <div class="fh5co_consectetur"> Tim Layanan Arsip Kawasan Yogyakarta Biro Komunikasi Publik,
                                Umum dan Kesekretariatan Badan
                                Riset dan Inovasi Nasional (BKPUK-BRIN) mengunjungi Arsip UGM pada hari Selasa tanggal
                                17
                                Oktober 2023.
                            </div>

                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img">
                                    <img src="images/kunjunganarsipkarangsambung.jpg" alt="" />
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <a href="single.php" class="fh5co_magna py-2"> Kunjungan Tim Layanan Arsip Karang Sambung
                                Kebumen.
                            </a> <a href="#" class="fh5co_mini_time py-3"> Layanan Sistem Informasi Kearsipan Yogyakarta
                                -
                                April 18,2016 </a>
                            <div class="fh5co_consectetur"> Tim Layanan Arsip Kawasan Yogyakarta Biro Komunikasi Publik,
                                Umum dan Kesekretariatan Badan
                                Riset dan Inovasi Nasional (BKPUK-BRIN) menerima kunjungan dari Tim Layanan Arsip
                                Kawasan
                                Karangsambung, Kebumen di Ruang Rapat Soeroto, KSE Baiquni Babarsari, Yogyakarta, pada
                                hari
                                Selasa, 17 Oktober 2023.
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="images/pemusnahan arsip foto ke 2.jpg" alt="" />
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <a href="single.php" class="fh5co_magna py-2"> Pemusnahan Arsip Tahap 1
                                . </a> <a href="#" class="fh5co_mini_time py-3"> Layanan Sistem Informasi Kearsipan
                                Yogyakarta -
                                April 18,2016 </a>
                            <div class="fh5co_consectetur">Pada
                                hari Senin, tanggal 11 Maret 2023, Tim Layanan Arsip Kawasan Yogyakarta Badan Riset dan
                                Inovasi Nasional
                                menyaksikan proses pemusnahan arsip tahap 1 yang dilaksanakan oleh pihak ke tiga, UD
                                Sregep.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="fh5co_tags_all">
                        <a href="#" class="fh5co_tagg">Business</a>
                        <a href="#" class="fh5co_tagg">Technology</a>
                        <a href="#" class="fh5co_tagg">Sport</a>
                        <a href="#" class="fh5co_tagg">Art</a>
                        <a href="#" class="fh5co_tagg">Lifestyle</a>
                        <a href="#" class="fh5co_tagg">Three</a>
                        <a href="#" class="fh5co_tagg">Photography</a>
                        <a href="#" class="fh5co_tagg">Lifestyle</a>
                        <a href="#" class="fh5co_tagg">Art</a>
                        <a href="#" class="fh5co_tagg">Education</a>
                        <a href="#" class="fh5co_tagg">Social</a>
                        <a href="#" class="fh5co_tagg">Three</a>
                    </div>
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/kunjunganugm.png" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Layanan Arsip Kawasan Yogyakarta Studi Banding
                                Kearsipan UGM .</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/pemusnahan arsip foto ke 2.jpg" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Pemusnahan Arsip Tahap 1.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/kunjunganarsipkarangsambung.jpg" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Kunjungan Tim Layanan Arsip Karang Sambung Kebumen.
                            </div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center"><img src="images/pemusnahanarsip.jpeg" alt="img"
                                class="fh5co_most_trading" /></div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Pemusnahan Arsip Tahap 1.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
                <div class="col-12 text-center pb-4 pt-4">
                    <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                    <a href="#" class="btn_pagging">1</a>
                    <a href="#" class="btn_pagging">2</a>
                    <a href="#" class="btn_pagging">3</a>
                    <a href="#" class="btn_pagging">...</a>
                    <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_footer_bg pb-3">
        <div class="container animate-box">
            <div class="row">
                <div class="col-12 spdp_right py-5"><img src="images/Logo BRIN_Lanscape_Colour.png"" alt=" img"
                        class="footer_logo" /></div>
                <div class="clearfix"></div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="footer_main_title py-3"> Sekilas Layanan Arsip </div>
                    <div class="footer_sub_about pb-3" style="text-align: justify;"> Arsip sering dibutuhkan dan dipakai
                        dalam bidang manajemen serta administrasi".
                        Berdasarkan Undang-Undang Nomor 43 Tahun 2009 tentang Kearsipan, arsip adalah rekaman
                        kegiatan atau peristiwa dalam berbagai bentuk serta media, yang dibuat dan diterima oleh
                        lembaga negara, pemerintah daerah, lembaga pendidikan, perusahaan, organisasi politik,
                        organisasi masyarakat maupun perseorangan, dalam rangka melaksanakan kehidupan
                        bermasyarakat, berbangsa dan bernegara.
                        Arsip dapat didefinisikan sebagai bukti atau rekaman aktivitas dan transaksi, mulai dari
                        pembayaran hingga langkah pengambilan keputusan.
                    </div>
                    <div class="footer_mediya_icon">
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                            </a></div>
                        <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a></div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="footer_main_title py-3"> Category</div>
                    <ul class="footer_menu">
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Study Banding</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Kunjungan</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Penelitian</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Layanan Arsip</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Buat Akun</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Sumber Daya</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Teknologi</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Lingkungan</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                    <div class="footer_main_title py-3"> Most Viewed Posts</div>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Study Banding </a>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Pemusnahan Arsip Tahap 1 </a>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Kunjungan Tim Kearsipan Karang Sambung Kebumen </a>
                    <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                            class="width_footer_sub_img" /></div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 ">
                    <div class="footer_main_title py-3"> Last Modified Posts</div>
                    <a href="#" class="footer_img_post_6"><img src="images/pemusnahanarsip.jpeg" alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="images/pemusnahan arsip foto ke 2.jpg"
                            alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="images/STRUKTUR ORGANISASI_page-0001.jpg"
                            alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="images/kunjunganarsipkarangsambung.jpg"
                            alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="images/kunjunganugm.png" alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="images/LOGO BATAN.png" alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="images/Tusi.png" alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="images/Proker.png" alt="img" /></a>
                    <a href="#" class="footer_img_post_6"><img src="images/profil.jpeg" alt="img" /></a>
                </div>
            </div>
            <div class="row justify-content-center pt-2 pb-4">
                <div class="col-12 col-md-8 col-lg-7 ">
                    <div class="input-group">
                        <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i
                                class="fa fa-envelope"></i></span>
                        <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..."
                            aria-describedby="basic-addon1">
                        <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i
                                class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co_footer_right_reserved">
        <div class="container">
            <div class="row  ">
                <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2018, All rights reserved. Design by <a
                        href="https://freehtml5.co" title="Free php5 Bootstrap templates">Layanan Sistem Informasi
                        Kawasan Yogyakarta</a>. </div>
                <div class="col-12 col-md-6 spdp_right py-4">
                    <a href="#" class="footer_last_part_menu">Home</a>
                    <a href="Contact_us.php" class="footer_last_part_menu">About</a>
                    <a href="Contact_us.php" class="footer_last_part_menu">Contact</a>
                    <a href="blog.php" class="footer_last_part_menu">Latest News</a>
                </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
  <script>
function redirectOnSelect(selectElement) {
  var selectedOption = selectElement.options[selectElement.selectedIndex].text;
  
  if (selectedOption === "Login") {
    window.location.href = "login.php";
  } else if (selectedOption === "Guest") {
    window.location.href = "index.php";
  }
}
</script>
</body>

</html>