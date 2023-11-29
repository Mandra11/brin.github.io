
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Layanan Sistem Informasi Kearsipan Yogyakarta</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="https://elsa.brin.go.id/public/include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="https://elsa.brin.go.id/public/include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="https://elsa.brin.go.id/public/include/rs-plugin/css/navigation.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://elsa.brin.go.id/public/images/favicon/favicon.ico" type="image/x-icon" />
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://elsa.brin.go.id/public/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="https://elsa.brin.go.id/public/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<style>
    
.footer-social-icons {
    width: 350px;
    display:block;
    margin: 0 auto;
}
.social-icon {
    color: #fff;
}
ul.social-icons {
    margin-top: 10px;
}
.social-icons li {
    vertical-align: top;
    display: inline;
    height: 100px;
}
.social-icons a {
    color: #fff;
    text-decoration: none;
}
.fa-facebook {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-facebook:hover {
    background-color: #3d5b99;
}
.fa-twitter {
    padding:10px 12px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-twitter:hover {
    background-color: #00aced;
}
.fa-rss {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-rss:hover {
    background-color: #eb8231;
}
.fa-youtube {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-youtube:hover {
    background-color: #e64a41;
}
.fa-linkedin {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-linkedin:hover {
    background-color: #0073a4;
}
.fa-github {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-github:hover {
    background-color: #5a32a3;
}
</style>
    </head>

    <body>
     
      
        <div style="height: 100px;"></div> 
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid" style="margin-left: 300px;margin-bottom: 100px;">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="login-form">
                            <div class="row">
                                <form action="proses_login.php" method="POST">
                                <div class="col-md-6">
                                    <label>E-mail / Username</label>
                                    <input class="form-control" type="text" name="email" placeholder="E-mail / Username">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="newaccount">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn" type="submit" name="submit_log">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                         <h6 style="margin-left: 50px;">Kembali Sebagai<a href="index.php">   Guest</a></h6>
                    </div>

                </div>
            </div>
        </div>
        <!-- Login End -->
        <!-- Footer
    ============================================= -->
    <footer id="footer_dark" class="dark" style="background-color: #e64a41;">
            <br></br>
            <div class="container">
                <!-- Footer Widgets -->
                <div class="footer-widgets-wrap clearfix">
                    <div class="col_two_third">
                        <div class="col_two_third">
                            <div class="widget clearfix">
                                <h4>Sekilas Layanan Arsip</h4>
                                <p>Arsip sering dibutuhkan dan dipakai dalam bidang manajemen serta administrasi".
Berdasarkan Undang-Undang Nomor 43 Tahun 2009 tentang Kearsipan, arsip adalah rekaman kegiatan atau peristiwa dalam berbagai bentuk serta media, yang dibuat dan diterima oleh lembaga negara, pemerintah daerah, lembaga pendidikan, perusahaan, organisasi politik, organisasi masyarakat maupun perseorangan, dalam rangka melaksanakan kehidupan bermasyarakat, berbangsa dan bernegara.
Arsip dapat didefinisikan sebagai bukti atau rekaman aktivitas dan transaksi, mulai dari pembayaran hingga langkah pengambilan keputusan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="widget subscribe-widget clearfix">
                            <h5><strong>Subscribe</strong> untuk mendapatkan informasi terbaru terkait layanan Badan Riset dan Inovasi Nasional:</h5>
                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form" action="https://elsa.brin.go.id/public/include/subscribe.php" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Masukan alamat email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="footer-social-icons">
    <h4 class="_14">Follow us on</h4>
    <ul class="social-icons">
        <li><a href="https://www.facebook.com/brin.indonesia?mibextid=MKOS29" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="https://x.com/brin_indonesia?s=20" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="https://youtube.com/@brinindonesia1?si=CMQsUEYE6v1H7AhK" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="https://www.linkedin.com/company/brin-ri/" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
    </ul>
 </div>
                        </div>
                    </div>
                </div><
            </div>
            <!-- Copyrights -->
        <div id="copyrights_dark">
                <div class="container clearfix">
                    <div class="col_half">
                        Copyrights &copy; 2023.<br>
                    </div>
                    <div class="col_half col_last tright">
                        <div class="copyright-links"><a href="http://brin.go.id">Badan Riset dan Inovasi Nasional</a></div>
                    </div>
                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
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