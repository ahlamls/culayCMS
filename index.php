<?php
require_once "modular/header.php";

$kotalist = ""; //isi kota
$produklist = "";
//handler onclick javascript

$sql = "SELECT * FROM kota";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $gambar = $row['gambar'];
      $nama = $row['nama'];
      $aidi = $row['id'];
$kotalist .= "<div class='col-6 col-md-3 pesbar'>
  <div class='pesbarimg' onclick='pesbarclick($aidi)'>
  <img src='$gambar' class='pesbarimgx'>
  <div class='pesbarimgtext'>
  <h3 class='pesbarimgtextx'>$nama</h3>
  </div>
  </div>
</div>";

      }
} else {
    $kotalist = "Tidak ada Kota";
}

$sql = "SELECT * FROM produk ORDER BY `id` DESC LIMIT 0,10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $gambar = $row['gambar'];
      $judul = $row['judul'];
      $harga = number_format($row['harga']);
      $qty = $row['qty'];
      $kategori = $row['kat_id'];
      
      $kota = $row['kota_id'];
      if ($row['type'] == 1) {
        $badge = "<span class='badge badge-success'>Tersedia</span>";
      } else {
        $badge = "<span class='badge badge-info'>Tawaran</span>";
      }
      $aidi = $row['id'];
$produklist .= "<div class='col-xs-12 col-md-3'>

  <div class='card' style='width: 100%;'>
    <img src='$gambar' class=' crop11 card-img-top' alt='$judul'>
    <div class='card-body'>
      <h5 class='card-title'>$judul</h5>
      $badge $kategori
    </div>
    <ul class='list-group list-group-flush'>
      <li class='list-group-item'>Rp $harga / $qty qty</li>
      <li class='list-group-item'>$kota</li>
    </ul>
    <div class='card-body'>
      <a href='produk.php?id=$aidi' ><button type='button ' class='btn btn-success w-100'>Beli</button></a>
    </div>
  </div>

</div>";

      }
} else {
    $produklist = "Tidak ada produk yang bisa ditampilkan";
}
?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
  <h1 class="d-none d-lg-block d-md-block">Lihat Pesanan Barang Sesuai Kota</h1>
    <h3 class="d-block d-lg-none d-md-none ">Lihat Pesanan Barang Sesuai Kota</h3>
  <hr>
  <div class="row pesbarrow">
    <?php echo $kotalist ?>

  </div>
  <hr>
  <h1 class="d-none d-lg-block d-md-block">Lihat Produk Pre-Order</h1>
    <h3 class="d-block d-lg-none d-md-none ">Lihat Produk Pre-Order</h3>
  <hr>
  <div class="row">
<?php echo $produklist;?>

  </div>
  <br>
<a href="produklist.php"><button class="btn w-100 btn-primary">Lebih Banyak Barang ></button></a>
<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>
<script>
function pesbarclick(aidi) {
  window.location.href = "produklist.php?kota=" + aidi;
}
</script>

<?php
require_once "modular/footer.php" ?>
