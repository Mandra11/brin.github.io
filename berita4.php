<!DOCTYPE php>
<!--
    24 News by Freephp5.co
    Twitter: https://twitter.com/fh5co
    Facebook: https://fb.com/fh5co
    URL: https://freephp5.co
-->
<php lang="en" class="no-js">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>24 News — Free Website Template, Free php5 Template by Freephp5.co</title>
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

    <body class="single">
        <div class="container-fluid fh5co_header_bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 fh5co_mediya_center"><a href="https://time.is/id/"
                            class="color_fff fh5co_mediya_setting">
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
                    <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                        <div class="text-center d-inline-block">
                            <a class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                            </a>
                        </div>
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
                        <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                        <div class="d-inline-block text-center dd_position_relative ">
                            <select class="form-control fh5co_text_select_option">
                            <option>Guest </option>
                            <option>Login </option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
            <div class="container padding_786">
                <nav class="navbar navbar-toggleable-md navbar-light ">
                    <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                    <a class="navbar-brand" href="#"><img src="images/Logo BRIN_Lanscape_Colour.png" alt="img"
                            class="mobile_logo_width" /></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="layanan.php">Layanan <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="single.php">Profil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="blog.php">Berita&Opini <span
                                        class="sr-only">(current)</span></a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri <span
                                        class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                    <a class="dropdown-item" href="foto.php">Foto</a>
                                    <a class="dropdown-item" href="vidio.php">Video</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainya <span
                                        class="sr-only">(current)</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                    <a class="dropdown-item" href="penelitian.php">E-Arsip Penelitian</a>
                                    <a class="dropdown-item" href="#">Akun Saya</a>
                                    <a class="dropdown-item" href="Contact_us.php">Hubungi Kami</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="fh5co-title-box"
            style="background-image: url(images/kunjungankedinasperpustakaanasrip.jpg); background-position: 50% 90.5px;"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="page-title">
                <span>January 1, 2018</span>
                <h2>KUNJUNGAN LAYANAN ARSIP YOGYAKARTA KE DINAS PERPUSTAKAAN DAN ARSIP DAERAH</h2>
            </div>
        </div>
        <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        <p>
                            Pada bulan Desember tahun 2022 lalu, Tim Layanan Arsip Kawasan Yogyakarta mengunjungi Dinas
                            Perpustakaan dan Arsip Daerah Yogyakarta (DPAD), dalam rangka studi banding mengenai
                            pengelolaan arsip. Pada kesempatan tersebut, tim layanan arsip kawasan Yogyakarta diberi
                            kesempatan untuk melakukan kunjungan ke Depo Arsip Statis, melakukan wawancara terkait
                            layanan arsip yang dikelola oleh DPAD, serta melakukan simulasi penggunaan layanan
                            peminjaman arsip melalui aplikasi yang dikembangkan DPAD. Namun untuk kunjungan ke Diorama
                            Arsip belum dapat terlaksana dikarenakan harus melalui ijin khusus dalam rangka mendata
                            jumlah peserta kunjungan, dan tidak dapat dilayani on the spot. Diorama arsip Jogja
                            menampilkan arsip-arsip yang terkait dengan sejarah panjang Yogyakarta dari era Panembahan
                            Senopati hingga yang terkini. Arsip-arsip yang ditampilkan berupa arsip tekstual, arsip
                            visual, arsip lisan, dan sejarah lisan yang ditata dan ditafsir secara unik dan kreatif
                            untuk memberikan sajian yang informatif dan edukatif, sekaligus menghibur. Arsip-arsip yang
                            ditampilkan dalam Diorama Arsip Jogja bersumber pada koleksi Dinas Perpustakaan dan Arsip
                            Daerah DIY, lembaga-lembaga arsip negara dan swasta di dalam negeri maupun luar negeri,
                            maupun koleksi pribadi. Harapannya masyarakat umum, dapat memetik pelajaran tentang sejarah
                            dan bermacam-macam bentuk arsip di Diorama Arsip Jogja. Beberapa jenis layanan DPAD
                            Yogyakarta di antaranya : 1. Layanan Informasi Publik, 2. Layanan Informasi Arsip, 3.
                            Layanan Peminjaman Arsip, 4. Layanan Reproduksi Arsip, 5. Layanan Loker Penitipan, 6.
                            Layanan Konsultasi Kearsipan, 7. Layanan Pemasyarakatan Arsip, 8. Layanan Jasa Scanning
                            Arsip, 9. Layanan Restorasi Arsip, 10. Layanan Pengaduan ,11. Layanan Diorama Arsip, 12.
                            Layanan Koleksi Deposit. Layanan peminjaman arsip yang ada pada DPAD dibagi menjadi dua,
                            yaitu peminjaman langsung (user datang) dan peminjaman tidak langsung (khusus peminjaman
                            arsip Kasultanan Yogyakarta dan Kadipaten Pakualaman. Dalam hal ini BPAD DIY hanya
                            menyediakan daftar arsip statis baik Arsip Kasultanan Ngayogyakarta maupun Arsip Kadipaten
                            Pakualaman. User hanya dapat melihat arsip dalam format digital lewat media akses. Apabila
                            pengguna (user) menghendaki melihat arsip asli, pengguna (user) harus mengajukan permohonan
                            ke Kraton atau Puro Pakualaman. Hal ini karena ruang simpan arsip, pengelolaan, maupun
                            kewenangan akses sepenuhnya menjadi tanggungjawab Kraton dan Puro Pakualaman. Pada agenda
                            kunjungan ini, tim layanan arsip dapat mengambil banyak informasi mengenai pengelolaan arsip
                            statis maupun pelayanan peminjaman arsip statis pada DPAD Yogyakarta. Layanan peminjaman
                            arsip statis merupakan salah satu jenis layanan yang digunakan banyak pihak, baik pelajar,
                            umum maupun periset yang membutuhkan sumber informasi dari jenis arsip sumber naskah kuno
                            yang berasal dari akuisisi keraton Yogyakarta dan Pakualaman.(KF/2022)
                        </p>
                        <p>

                        </p>
                        <h3>Opini</h3>
                        <div class="checkout-btn">
                            <button>Lihat Opini</button>
                        </div>
                        <p>

                        </p>
                       
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
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="images/pemusnahanarsip.jpeg" alt="img" class="fh5co_most_trading" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="images/pemusnahanarsip.jpeg" alt="img" class="fh5co_most_trading" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center"><img src="images/kunjunganugm.png" alt="img"
                                    class="fh5co_most_trading" /></div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pb-4 pt-5">
            <div class="container animate-box">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
                </div>
                <div class="owl-carousel owl-theme" id="slider2">
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/kunjunganugm.png" alt="" /></div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best
                                        computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/pemusnahanarsip.jpeg" alt="" /></div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best
                                        computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/kunjunganugm.png" alt="" /></div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best
                                        computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/pemusnahanarsip (1).jpeg" alt="" /></div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best
                                        computer speakers in the market</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fh5co_footer_bg pb-3">
            <div class="container animate-box">
                <div class="row">
                    <div class="col-12 spdp_right py-5"><img
                            src="images/Main_Logo_of_National_Research_and_Innovation_Agency_of_Indonesia.svg.png"
                            alt="img" class="footer_logo" /></div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="footer_main_title py-3"> About</div>
                        <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and
                            typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                            an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
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
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Business</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Entertainment</a>
                            </li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Environment</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Health</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Life style</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Politics</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Technology</a></li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; World</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                        <div class="footer_main_title py-3"> Most Viewed Posts</div>
                        <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble
                        </a>
                        <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble
                        </a>
                        <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble
                        </a>
                        <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                                class="width_footer_sub_img" /></div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 ">
                        <div class="footer_main_title py-3"> Last Modified Posts</div>
                        <a href="#" class="footer_img_post_6"><img src="images/pemusnahanarsip.jpeg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/pemusnahan arsip foto ke 2.jpg"
                                alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/kunjunganugm.png" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/pemusnahan arsip foto ke 2.jpg"
                                alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/kunjunganugm.png" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/kunjunganugm.png" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/download.jpg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/pemusnahanarsip.jpeg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/pemusnahan arsip foto ke 2.jpg"
                                alt="img" /></a>
                    </div>
                </div>
                <div class="row justify-content-center pt-2 pb-4">
                    <div class="col-12 col-md-8 col-lg-7 ">
                        <div class="input-group">
                            <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i
                                    class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control fh5co_footer_text_box"
                                placeholder="Enter your email..." aria-describedby="basic-addon1">
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
                            href="https://freehtml5.co" title="Free php5 Bootstrap templates">Freephp5.co</a>. </div>
                    <div class="col-12 col-md-6 spdp_right py-4">
                        <a href="#" class="footer_last_part_menu">Home</a>
                        <a href="Contact_us.php" class="footer_last_part_menu">Layanan</a>
                        <a href="Contact_us.php" class="footer_last_part_menu">Profil</a>
                        <a href="blog.php" class="footer_last_part_menu">E-Arsip Penelitian</a>
                        <a href="blog.php" class="footer_last_part_menu">Berita&Opini</a>
                        <a href="blog.php" class="footer_last_part_menu">Akun Saya</a>
                        <a href="blog.php" class="footer_last_part_menu">E-Arsip Penelitian</a>
                        <a href="blog.php" class="footer_last_part_menu">E-Arsip Penelitian</a>
                        <a href="blog.php" class="footer_last_part_menu">E-Arsip Penelitian</a>
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
        <!-- Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>
        <script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) { $(window).stellar(); }</script>

    </body>
</html>