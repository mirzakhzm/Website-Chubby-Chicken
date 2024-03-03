<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chubby Chicken - The Best Chicken Snack</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex"></div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">Chubby Chicken</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="userpage.php" class="nav-item nav-link">Beranda</a>
                <a href="products.php" class="nav-item nav-link active">Produk</a>
                <a href="location.php" class="nav-item nav-link">Lokasi</a>
                <a href="contact.php" class="nav-item nav-link">Kontak</a>
                <a href="ulasan.php" class="nav-item nav-link">Ulasan</a>
                <a href="join.php" class="nav-item nav-link">Join Us</a>
            </div>
            <div class="d-none d-lg-flex">
                <a href="data-keranjang.php" class="flex-shrink-0 btn-lg-square border-none">
                    <i class="fa fa-shopping-cart text-primary"></i>
                </a>
            </div>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/produk-1.jpg" alt="" style="width: 2000px; height: 500px;">
                <div class="owl-carousel-inner">
                    <div class="container text-center pt-5 pb-3">
                        <h1 class="display-4 text-white animated slideInDown mb-3">Produk</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a class="text-white" href="userpage.php">Beranda</a></li>
                                <li class="breadcrumb-item text-primary active" aria-current="page">Produk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Product Start -->
        <div class="container-xxl bg-light my-6 py-6 pt-0">
            <div class="container">
                <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="display-4 text-light mb-0">Nikmati Kelezatan Setiap Gigitan</h1>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <div class="d-inline-flex align-items-center text-start">
                                <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                                <div class="ms-4">
                                    <p class="fs-5 fw-bold mb-0">Hubungi Kami</p>
                                    <p class="fs-1 fw-bold mb-0">+62 812 3415 6789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="text-primary text-uppercase mb-2">// Produk Chubby Chicken</p>
                    <h1 class="display-6 mb-4">Jelajahi Kategori Produk Chubby</h1>
                </div>
                <div class="row">
                    <?php
                    include('koneksi.php');
                    $sql = "SELECT * FROM produk";
                    $q = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($q)) {
                        ?>
                        <div class="col-md-4 text-center">
                            <div class="product">
                                <div class="product-grid" style="background-image:url(img/<?php echo $data["gambar"]; ?>);">
                                </div>
                                <div class="desc">
                                    <h3><br>
                                        <?php echo $data["nama_produk"]; ?>
                                    </h3>
                                    <span class="price">Rp
                                        <?php echo number_format($data["harga"], 0, ',', '.'); ?>
                                    </span>
                                </div>
                                <a href="data-keranjang.php" class="btn btn-primary" role="button" name="beli">
                                    Beli
                                </a>
                                </form>
                            </div><br></br>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark text-light footer my-6 mb-0 py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-light mb-4">Office Address</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jakarta Pusat</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 812 3415 6789</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>chubbychicken@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                    href="https://www.instagram.com/chubby.id/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                        class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="products.php">Produk</a>
                            <a class="btn btn-link" href="location.php">Lokasi</a>
                            <a class="btn btn-link" href="contact.php">Kontak</a>
                            <a class="btn btn-link" href="ulasan.php">Ulasan</a>
                            <a class="btn btn-link" href="join.php">Join US</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Copyright Start -->
            <div class="container-fluid copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">Chubby Chicken</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            Designed By <a href="#">Kelompok 9</a>
                        </div>
                    </div>
                </div>
            </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>