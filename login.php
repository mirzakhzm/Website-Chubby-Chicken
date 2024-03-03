<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section login min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form action="" method="POST" class="row g-3 needs-validation">

                    <?php
                    include "koneksi.php";

                    if (isset($_POST['submit'])) {
                      // Menangkap parameter dari form yang diisi oleh pengguna
                      $username = $_POST['username'];
                      $password = $_POST['password'];

                      // Membuat query untuk memeriksa kecocokan username dan password
                      $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
                      $result = mysqli_query($koneksi, $query);
                      $row = mysqli_fetch_assoc($result);

                      // Memeriksa apakah query menghasilkan baris data
                      if ($row) {
                        // Jika username dan password sesuai, maka melakukan aksi yang diinginkan
                        // Contoh: memberikan akses ke halaman lain atau menjalankan perintah lainnya
                    
                        // Memeriksa apakah username adalah "admin"
                        if ($username === 'admin') {
                          // Melakukan redirect ke halaman admin
                          header('Location:admin/index.php');
                          exit(); // Menghentikan eksekusi script setelah melakukan redirect
                        } else {
                          // Melakukan redirect ke halaman lain (misalnya index.php)
                          header('Location: userpage.php');
                          exit(); // Menghentikan eksekusi script setelah melakukan redirect
                        }
                      } else {
                        // Jika username dan password tidak sesuai, menampilkan peringatan menggunakan alert Bootstrap
                        echo '<div class="alert alert-danger" role="alert">Username atau password tidak sesuai.</div>';
                      }

                      // Menutup koneksi ke server database
                      mysqli_close($koneksi);
                    }
                    ?>

                    <div class="col-12">
                      <label for="ID" class="form-label">ID</label>
                      <div class="input-group has-validation">
                        <input type="text" id="id" name="id" class="form-control" readonly>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="username" class="form-label">username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="username" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" type="submit" value="simpan">Login</button>
                    </div>

                    <div class="signup">
                      <div class="d-none d-lg-flex">
                        <a href="signup.php" class="nav-item nav-link">Sign Up </a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>