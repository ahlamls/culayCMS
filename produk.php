<?php
require_once "modular/header.php";
$aidix = htmlentities($_GET['id']);
$sql = "SELECT * FROM produk  WHERE `id` = $aidix";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $gambar = $row['gambar'];
      $judul = $row['judul'];
      $harga = number_format($row['harga']);
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
      if ($row['type'] == 0) {
        $badge = "<span class='badge badge-outlined badge-success'>Tersedia</span>";
      } else {
        $badge = "<span class='badge badge-outlined badge-info'>Tawaran</span>";
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
  <h1 class="d-none d-lg-block d-md-block"><?php echo $judul?></h1>
    <h3 class="d-block d-lg-none d-md-none "><?php echo $judul?></h3>
  <hr>
  <div class="row pesbarrow">
<div class="col-xs-12 col-md-8">
  <div class="f169">
          <img src="<?php echo $gambar ?>" class="ar169 card-img-top w-100" alt="<?php echo $judul?>">
        </div>
</div>
<div class="col-xs-12 col-md-4">
<h2>Rp <?php echo $harga ?></h2>
<p>/ <?php echo $qty?>qty<br>
<?php echo $badge ?><span class='badge badge-outlined badge-warning'><?php echo $kategori ?></span>
<hr>
<b>Kota: </b> <?php echo $kota ?><br>
<b>Dibuat Oleh: </b> <?php echo $user ?>
<?php
if ($uid !== $user_id) {
?>
<a href="beli.php?id=<?php echo $aidix?>"><button class="w-100 btn btn-outline-success">Beli</button></a>
<?php
} else { ?>
<a href="hapus.php?id=<?php echo $aidix?>"><button class="w-100 btn btn-outline-danger">Hapus</button></a>
<?php } ?>
</div>
<div class="col-xs-12 col-md-8">
<hr>
<p><?php echo $desk ?></p>
</div>

  </div>
  <hr>

</main>

<?php
require_once "modular/footer.php" ?>
