<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title .$company->nama?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" href="<?= base_url('template/img/')?>icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('template/css/')?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>nice-select.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>flaticon.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>animate.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>slicknav.css">
    <link rel="stylesheet" href="<?= base_url('template/css/')?>style.css">
    <!-- <link rel="stylesheet" href="<?= base_url('template/css/')?>responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-contact">
                                <a href="#"><i class="fa fa-phone"></i> +<?= $company->phone?></a>
                                <a href="#"><i class="fa fa-envelope"></i> <?= $company->email?></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-top-menu">
                                <nav>
                                    <ul>
                                        <li><a href="#">News & media</a></li>
                                        <li><a href="#">Review</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="<?= base_url()?>">
                                    <img src="<?= base_url('template/img/')?>logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-10">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a <?php if(!$this->uri->segment(1)) echo "class='active'"; ?> href="<?= base_url()?>">Home</a></li>
                                        <li><a <?php if($this->uri->segment(2) == 'about') echo "class='active'"; ?> href="<?= base_url('web/about')?>">About</a></li>
                                        <li><a <?php if($this->uri->segment(2) == 'service') echo "class='active'"; ?> href="<?= base_url('web/service')?>">Services</a></li>
<!--                                    <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                <li><a href="service-details.html">service-details</a></li>
                                                <li><a href="project-details.html">project-details</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a <?php if($this->uri->segment(2) == 'contact') echo "class='active'"; ?> href="<?= base_url('web/contact')?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

<?= $contents?>

    <!-- footer-start -->
    <footer class="footer-area ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-3 col-xl-4">
                    <div class="single-footer-widget footer_1">
                        <a href="<?= base_url()?>"> <img src="<?= base_url('template/img/')?>footer-logo.png" alt=""> </a>
                        <p><?= $company->motto?></p>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="single-footer-widget">
                        <h4>Link</h4>
                        <ul>
                            <li><a href="<?= base_url('web/about')?>">About</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="<?= base_url('web/career')?>">Career</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-6">
                    <div class="single-footer-widget footer_icon">
                        <h4>Company</h4>
                        <div class="office-location">
                            <ul>
                                <li>
                                    <strong><?= $company->nama?></strong>
                                    <p><?= $company->address?></p>
                                </li>
                                <!-- 
                                <li>
                                    <strong>New York - USA</strong>
                                    <p>127, Manchaster city, London <br>
                                        +008 728 362 278</p>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0">
                            <?= strtoupper($company->nama) ?> 2019 
                        </p>
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> 
                            by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->



    <!-- JS here -->
    <script src="<?= base_url('template/js/')?>vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= base_url('template/js/')?>vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('template/js/')?>popper.min.js"></script>
    <script src="<?= base_url('template/js/')?>bootstrap.min.js"></script>
    <script src="<?= base_url('template/js/')?>owl.carousel.min.js"></script>
    <script src="<?= base_url('template/js/')?>isotope.pkgd.min.js"></script>
    <script src="<?= base_url('template/js/')?>ajax-form.js"></script>
    <script src="<?= base_url('template/js/')?>waypoints.min.js"></script>
    <script src="<?= base_url('template/js/')?>jquery.counterup.min.js"></script>
    <script src="<?= base_url('template/js/')?>imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('template/js/')?>scrollIt.js"></script>
    <script src="<?= base_url('template/js/')?>jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('template/js/')?>wow.min.js"></script>
    <script src="<?= base_url('template/js/')?>nice-select.min.js"></script>
    <script src="<?= base_url('template/js/')?>jquery.slicknav.min.js"></script>
    <script src="<?= base_url('template/js/')?>jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('template/js/')?>plugins.js"></script>

    <!--contact js-->
    <script src="<?= base_url('template/js/')?>contact.js"></script>
    <script src="<?= base_url('template/js/')?>jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('template/js/')?>jquery.form.js"></script>
    <script src="<?= base_url('template/js/')?>jquery.validate.min.js"></script>
    <script src="<?= base_url('template/js/')?>mail-script.js"></script>

    <script src="<?= base_url('template/js/')?>main.js"></script>

</body>

</html>