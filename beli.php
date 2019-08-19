<?php
require_once "modular/header.php";

haruslogin();
if (!isset($_GET['id'])){
  die("ID tidak valid");
}

$sqlx = "SELECT saldo FROM user WHERE `id` = $uid";
$resultx = $conn->query($sqlx);

if ($resultx->num_rows > 0) {
// output data of each row
while($rowx = $resultx->fetch_assoc()) {
$saldo = $rowx['saldo'];
}
} else {
  die("Invalid uid");
}

$aidix = eskep($_GET['id']);
$sql = "SELECT * FROM produk  WHERE `id` = $aidix";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $gambar = $row['gambar'];
      $judul = $row['judul'];
      $harga = number_format($row['harga']);
      if ($row['harga'] > $saldo) {
        header("Location: alert.php?id=1&msg=Saldo Tidak Cukup" );
        die();
      }
      $qty = $row['qty'];
      $desk = $row['desk'];
      $kategori_id = $row['kat_id'];
      $kota_id = $row['kota_id'];
      $user_id = $row['user_id'];
      $sqlx = "SELECT nama FROM kategori WHERE `id` = $kategori_id";
$resultx = $conn->query($sqlx);

if ($resultx->num_rows > 0) {
    // output data of each row
    while($rowx = $resultx->fetch_assoc()) {
        $kategori = $rowx['nama'];
    }
} else {
  $kategori = "Tidak Diketahui";
}
$sqlx = "SELECT nama FROM kota WHERE `id` = $kota_id";
$resultx = $conn->query($sqlx);

if ($resultx->num_rows > 0) {
// output data of each row
while($rowx = $resultx->fetch_assoc()) {
  $kota = $rowx['nama'];
}
} else {
$kota = "Tidak Diketahui";
}
$sqlx = "SELECT name FROM user WHERE `id` = $user_id";
$resultx = $conn->query($sqlx);

if ($resultx->num_rows > 0) {
// output data of each row
while($rowx = $resultx->fetch_assoc()) {
  $user= $rowx['name'];
}
} else {
$user = "Tidak Diketahui" ;
}
      if ($row['type'] == 1) {
        $badge = "<span class='badge badge-success'>Tersedia</span>";
      } else {
        $badge = "<span class='badge badge-info'>Tawaran</span>";
      }
      $aidi = $row['id'];

      }
} else {
    die("ID tidak ada");
}


?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
  <h1 class="d-none d-lg-block d-md-block">Beli <?php echo htmlentities($judul) ?></h1>
    <h3 class="d-block d-lg-none d-md-none ">Beli <?php echo htmlentities($judul) ?></h3>
  <hr>
        <form action="prosesbeli.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $aidix?>">
          <div class="row">

    <div class="form-group col-xs-12 col-md-12">
          <label for="name">Nama Penerima</label>
            <input type="text" name="name" class="form-control" id="name" required="">
          </div>
              <div class="form-group col-12">
          <label for="desk">Alamat</label>
            <textarea type="text" name="alamat" class="form-control" id="alamat" required=""></textarea>
          </div>
              <div class="form-group col-xs-12 col-md-6">

</div>
<br>
<button type="submit" class="btn w-100 btn-outline-success">Beli Barang (Rp <?php echo $harga?>)</button>
</form>
<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>

<?php
require_once "modular/footer.php" ?>
