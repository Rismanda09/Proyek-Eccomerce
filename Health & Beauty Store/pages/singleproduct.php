<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleproduct.css">
    <link rel="stylesheet" type="text/css" href="../css/stylehome.css">

    <title>Manda Store</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
      <img src="../assets/logo skincare.png.jpg" alt="" width="50" height="50" class="me-2">
      <strong>Manda Store</strong>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <form class="d-flex ms-auto">
      <input class="form-control me-2" type="search" placeholder="Cari Barang Anda!" aria-label="Cari">
      <button class="btn btn-light" type="submit">Cari</button>
    </form>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homepage.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="keranjang.html">Tentang</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="register.html">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Masuk</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 
<!--Breadcrumb-->
<div class="container">
  <nav aria-label="breadcrumb" style="background-color: rgb(138, 178, 143);"  class="mt-3">
    <ol class="breadcrumb p-3">
      <li class="breadcrumb-item"><a href="homepage.php"  class="text-decoration-none">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page" style="color: black;">Detail Produk</li>
    </ol>
  </nav>
</div>
<!--Breadcrumb-->

<!--Single produk-->
 <div class="container">
  <div class="row row-product">
    <div class="col-lg-5">
      <figure class="figure">
        <img src="../assets/produk/facial wash.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 450px;">
      </figure>
    </div>

<!--detail produk-->
    <div class="col-lg-7">
      <br>
      <h4>The Originote Cicamide Facial Cleanser - Face Wash Facial Wash </h4>
    <div class="garis-product"></div>
    <h3 class="text-muted mb-2">Rp. 36.000</h3>

    <button class="button btn-dark btn-sm">-</button>
    <span class="mx-2">1</span>
    <button class="button btn-warning btn-sm text-white">+</button>
    <span class="mx-2">Tersisa 150 </span>

    <div class="btn-produk mt-4">
      <a href="keranjang.html" class="btn btn-dark btn-lh" style="font-size: small;">Masukkan Keranjang</a>
      <a href="#" class="btn btn-warning btn-lh" style="font-size: small;">Beli Sekarang</a>
  <!--deskripsi-->
      <div class="row row-product">
           <divv class="col-12">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi Produk</button>
        </li>
      </ul>
      <div class="tab-content p-3" id="myTabContent">
        <div class="tab-pane fade show active deskripsi" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
          <p>
            The Originote Cicamide Facial Cleanser - Face Wash Facial Wash </br></br>

            Pembersih wajah dengan kandungan Ceramide, 
            Niacinamide dan Centella Asiatica yang berfungsi untuk 
            membantu menjaga dan merawat kelembapan kulit wajah, 
            mengangkat dan membersihkan minyak berlebih serta membantu 
            mencegah timbulnya jerawat dengan kandungan ringan yang membantu merawat skin barrier wajah.
            </br></br>
            MANFAAT</br>

            <li>Membersihkan wajah dari debu,
            minyak dan sisa makeup</li>
            <li>Mencegah timbulnya jerawat 
            Membantu merawat skin barrier </li>
          </p>
        </div>
    </div>
    </div>
  </div>
 </div>
<!--detail produk-->

  <!-- footer -->
  <footer class="bg-light p-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="" class="text-decoration-none">
            <img src="../assets/logo skincare.png.jpg" style="width: 30px;">
          </a>
          <span>Created and Developed by <a class="text-decoration-none text-dark fw-bold">Rismanda Aulia Putri</a></span>
        </div>

        <div class="col-md-6 text-end">
          <a href="" class="text-decoration-none">
            <img src="../assets/sosialMedia/facebook.png" class="ms-2" style="width: 32px;">
          </a>
          <a href="" class="text-decoration-none">
            <img src="../assets/sosialMedia/instagram.png" class="ms-2" style="width: 30px;">
          </a>
          <a href="" class="text-decoration-none">
            <img src="../assets/sosialMedia/linkedin.png" class="ms-2" style="width: 30px;">
          </a>
          <a href="" class="text-decoration-none">
            <img src="../assets/sosialMedia/twitter.png" class="ms-2" style="width: 30px;">
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer -->
    <br><!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>