<?php
require_once "modular/header.php";
?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
  <h1 class="d-none d-lg-block d-md-block">Lihat Pesanan Barang Sesuai Kota</h1>
    <h3 class="d-block d-lg-none d-md-none ">Lihat Pesanan Barang Sesuai Kota</h3>
  <hr>
  <div class="row pesbarrow">
    <div class="col-xs-12 col-md-3 pesbar">
      <div class="pesbarimg">
      <img src="data/image/bali.jpg" class="pesbarimgx">
      <div class="pesbarimgtext">
      <h3 class="pesbarimgtextx">Bali</h3>
      </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pesbar">
      <div class="pesbarimg">
      <img src="data/image/bandung.jpg" class="pesbarimgx">
      <div class="pesbarimgtext">
      <h3 class="pesbarimgtextx">Bandung</h3>
      </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pesbar">
      <div class="pesbarimg">
      <img src="data/image/jakarta.jpg" class="pesbarimgx">
      <div class="pesbarimgtext">
      <h3 class="pesbarimgtextx">Jakarta</h3>
      </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pesbar">
      <div class="pesbarimg">
      <img src="data/image/jogja.jpg" class="pesbarimgx">
      <div class="pesbarimgtext">
      <h3 class="pesbarimgtextx">Yogyakarta</h3>
      </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-3 pesbar">
      <div class="pesbarimg">
      <img src="data/image/bogor.png" class="pesbarimgx">
      <div class="pesbarimgtext">
      <h3 class="pesbarimgtextx">Bogor</h3>
      </div>
      </div>
    </div>
  </div>
  <hr>
  <h1 class="d-none d-lg-block d-md-block">Lihat Produk Pre-Order</h1>
    <h3 class="d-block d-lg-none d-md-none ">Lihat Produk Pre-Order</h3>
  <hr>
  <div class="row">
    <div class="col-xs-12 col-md-3">

      <div class="card" style="width: 100%;">
        <img src="data/image/dompnyut.jpg" class=" crop11 card-img-top" alt="Dompet">
        <div class="card-body">
          <h5 class="card-title">Dompet</h5>
          <span class="badge badge-success">Tersedia</span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Rp 69,000 / 1qty</li>
          <li class="list-group-item">Bandung</li>
        </ul>
        <div class="card-body">
          <a href="produk.php?id=1" ><button type="button " class="btn btn-success w-100">Beli</button></a>
        </div>
      </div>

    </div>
    <div class="col-xs-12 col-md-3">

      <div class="card" style="width: 100%;">
        <img src="data/image/kadal.jpeg" class=" crop11 card-img-top" alt="Dompet">
        <div class="card-body">
          <h5 class="card-title">Kadal Gurun</h5>
          <span class="badge badge-info">Tawaran</span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Rp 80,000,000 / 1qty</li>
          <li class="list-group-item">Bogor</li>
        </ul>
        <div class="card-body">
          <button type="button" class="btn btn-success w-100">Beli</button>
        </div>
      </div>

    </div>
  </div>
  <br>
<button class="btn w-100 btn-primary">Lebih Banyak Barang ></button>
<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>

<?php
require_once "modular/footer.php" ?>
