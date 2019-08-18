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
      $kategori = $row['kat_id'];
      $kota = $row['kota_id'];
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
<?php echo $badge ?>
<button class="w-100 btn btn-success">Beli</button>
</div>
<div class="col-xs-12 col-md-8">
<hr>
<p><?php echo $desk ?></p>
</div>

  </div>

</main>

<?php
require_once "modular/footer.php" ?>
