<?php
require_once "modular/header.php";

if (!isset($_GET['kat']) AND !isset($_GET['kota']) AND !isset($_GET['search']) AND !isset($_GET['user'])) {
  $title = "Daftar Produk";
  $query = "";
} else if (isset($_GET['kat'])){
  //$title = "Makanan";
  $kat = eskep($_GET['kat']);
    $query = "WHERE `kat_id` = $kat";

    $sql = "SELECT nama FROM kategori WHERE `id` = '$kat'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $title = $row['nama'];
    }
} else {
  die("Invalid Kategori");
}
} else if (isset($_GET['kota'])){
  //$title="Bogor";
  $kota = eskep($_GET['kota']);
    $query = "WHERE `kota_id` = $kota";

    $sql = "SELECT nama FROM kota WHERE `id` = '$kota'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $title = $row['nama'];
    }
} else {
  die("Invalid Kota");
}
} else if (isset($_GET['search'])) {

  $search = eskep(htmlentities($_GET['search']));
    $title="Hasil Pencarian : " . $search;
    $query = "WHERE `judul` LIKE '%$search%'";
} else if (isset($_GET['user'])) {

  $search = eskep(htmlentities($_GET['user']));

    $query = "WHERE `user_id` = '$search'";

    $sql = "SELECT name FROM user WHERE `id` = '$search'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          $title="User : " . $row['name'];
    }
} else {
  die("Invalid User");
}
}
$sql = "SELECT * FROM produk $query ORDER BY `id` DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $gambar = $row['gambar'];
      $judul = $row['judul'];
      $harga = number_format($row['harga']);
      $qty = $row['qty'];
      $kategori_id = $row['kat_id'];
      $user_id = $row['user_id'];
      $kota_id = $row['kota_id'];

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
$produklist .= "<div class='col-xs-12 col-md-3 pcard'>
<br>
  <div class='card' style='width: 100%;'>
  <div class='card-header'>
   $user
 </div>
    <img src='$gambar' class=' crop11 card-img-top' alt='$judul'>
    <div class='card-body'>
      <h5 class='card-title'>$judul</h5>
      $badge <span class='badge badge-outlined badge-warning'>$kategori</span>
    </div>
    <ul class='list-group list-group-flush'>
      <li class='list-group-item'>Rp $harga / $qty qty</li>
      <li class='list-group-item'>$kota</li>
    </ul>
    <div class='card-body'>
      <a href='produk.php?id=$aidi' ><button type='button ' class='btn btn-outline-success w-100'>Beli</button></a>
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
  <h1 class="d-none d-lg-block d-md-block"><?php echo $title ?></h1>
    <h3 class="d-block d-lg-none d-md-none "><?php echo $title ?></h3>
  <hr>
  <div class="row">
<?php echo $produklist;?>

  </div>



<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>

<?php
require_once "modular/footer.php" ?>
