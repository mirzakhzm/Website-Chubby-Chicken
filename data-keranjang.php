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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark py-lg-0 px-lg-5">
        <a href="userpage.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">Chubby Chicken</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Beranda</a>
                <a href="products.php" class="nav-item nav-link">Produk</a>
                <a href="location.php" class="nav-item nav-link">Lokasi</a>
                <a href="contact.php" class="nav-item nav-link">Kontak</a>
                <a href="ulasan.php" class="nav-item nav-link">Ulasan</a>
                <a href="join.php" class="nav-item nav-link">Join Us</a>
            </div>
    </nav>

    <div class="container-fluid text-light footer my-6 mb-0 py-10 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-6">
            <div class="row g-5">
                <div class="container" style="padding-top: 5px; padding-bottom: 200px;">
                    <h1>Data Pesanan</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            // Mengambil data pesanan dari database
                            $query = "SELECT * FROM orders";
                            $result = mysqli_query($koneksi, $query);

                            // Menampilkan data pesanan dalam tabel
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['nama_produk'] . "</td>";
                                echo "<td>" . $row['jumlah'] . "</td>";
                                echo "</td>";   
                                echo "<td>" . $row['harga'] . "</td>";
                                echo "<td>" . $row['status'] . "</td>";
                                echo "<td>";
                                echo "<div class='btn-group'>";
                                echo "<form method='POST' action='hapus_pesanan.php'>";
                                echo "<input type='hidden' name='id_produk' value='" . $row['id_produk'] . "'>";
                                echo "<button class='btn btn-danger mr-2' type='submit'>Hapus</button>";
                                echo "</form>";
                                echo "</div>";
                                echo "</td>";
                                echo "</tr>";
                            }


                            // Menutup koneksi database
                            mysqli_close($koneksi);
                            ?>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Bayar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin Membayar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form method="POST" action="update_pesanan.php">
                        <input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>">
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </form>

                </div>
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
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
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