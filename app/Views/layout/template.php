<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <meta content="" name="description">
    <meta content="" name="keywords">
    <title><?= $title; ?></title>
    <!-- Favicons -->
    <link href=" <?php echo base_url('img/favicon.png'); ?> " rel="icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?> " rel="stylesheet">
    <link href="<?php echo base_url('vendor/bootstrap-icons/bootstrap-icons.css'); ?> " rel="stylesheet">
    <link href="<?php echo base_url('vendor/boxicons/css/boxicons.min.css'); ?> " rel="stylesheet">
    <link href="<?php echo base_url('vendor/glightbox/css/glightbox.min.css'); ?> " rel="stylesheet">
    <link href="<?php echo base_url('vendor/remixicon/remixicon.css'); ?> " rel="stylesheet">
    <link href="<?php echo base_url('vendor/swiper/swiper-bundle.min.css'); ?> " rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('css/style.css'); ?> " rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
    <script src="<?php echo base_url('vendor/glightbox/js/glightbox.min.js'); ?> "></script>
    <script src="<?php echo base_url('vendor/isotope-layout/isotope.pkgd.min.js'); ?> "></script>
    <script src="<?php echo base_url('vendor/php-email-form/validate.js'); ?> "></script>
    <script src="<?php echo base_url('vendor/purecounter/purecounter.js'); ?> "></script>
    <script src="<?php echo base_url('vendor/swiper/swiper-bundle.min.js'); ?> "></script>
    <script src="<?php echo base_url('vendor/typed.js/typed.min.js'); ?> "></script>
    <script src="<?php echo base_url('vendor/aos/aos.js'); ?> "></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('js/main.js'); ?> "></script>

    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $.get("date-time.php", function(data) {
                    // Display the returned data in browser
                    $("#result").html(data);
                });
            });
        });
    </script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                    <h1 class="logo me-auto me-lg-0"><a href="<?= base_url('home/home'); ?>">Pariwisata Tapanuli Utara</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="scrollto" href="hotel1.html">Hotel</a></li>
                            <li><a class="scrollto " href="#portfolio">Tour & Travel</a></li>
                            <li><a class="scrollto" href="<?php echo base_url('Home/kuliner'); ?>">Kuliner</a></li>
                            <li><a class="scrollto" href="#pricing">Oleh-oleh</a></li>
                        </ul>
                    </nav><!-- .navbar -->
                    <?php if (session()->get('isLoggedIn') != null) : ?>
                        <a href="<?= base_url('AuthController/logout') ?>" class="get-started-btn">Logout</a>
                    <?php else : ?>
                        <a href="<?= base_url('login') ?>" class="get-started-btn">Login</a>
                    <?php endif ?>

                </div>
                <div class="Hotbg">
                    <input onchange="ganti()" id="search" type="text" name="input" class="Hotbg-txt" placeholder="Search >>>">
                    <a id="searchb" href="" class="Hotbg-btn">
                        <i class="fa fa-search"></i>
                    </a>
                </div>

                <script>
                    function ganti() {
                        let searchin = document.getElementById("search");
                        let searchButton = document.getElementById("searchb");
                        let baseURL = "<?php echo base_url('Home/search'); ?>";
                        let link = baseURL + "?cari=" + searchin.value;
                        searchButton.href = link;
                    }
                </script>

            </div>
    </header><!-- End Header -->

    <?= $this->renderSection('content'); ?>
    <!--=======Footer=======-->
    <footer id="footer">
        <div class="container">
            <h3>Diskominfo Tapanuli Utara</h3>
            <p>Dinas Komunikasi dan Informatika Tapanuli Utara</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook-circle"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram-alt"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin-square"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Diskominfo Tapanuli Utara <?= date('Y'); ?></span></strong>.
            </div>
        </div>
    </footer><!-- End Footer -->
</body>