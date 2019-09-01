<?php
require_once "modular/header.php";
$txlist = "";
$txlist2 = "";

$sql = "SELECT * FROM transaksi  WHERE `pembeli_id` = $uid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $aidi = $row['id'];
      $penerima = $row['penerima'];
        $nama = $row['nama'];
      $alamat = $row['alamat'];
      $status = $row['status'];
      $harga = number_format($row['harga']);
      $txlist .="<tr>
        <th scope='row'>$aidi</th>
        <td>$penerima</td>
          <td>$nama</td>
        <td>$alamat</td>
        <td>$status</td>
        <td>Rp $harga</td>
        <td></td>

      </tr>";
    }
} else {
    $txlist = "Tidak Ada Transaksi";
}

$sql = "SELECT * FROM transaksi  WHERE `penjual_id` = $uid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $aidi = $row['id'];
      $penerima = $row['penerima'];
        $nama = $row['nama'];
      $alamat = $row['alamat'];
      $status = $row['status'];
      $harga = number_format($row['harga']);
      $txlist2 .="<tr>
        <th scope='row'>$aidi</th>
        <td>$penerima</td>
          <td>$nama</td>
        <td>$alamat</td>
        <td>$status</td>
        <td>Rp $harga</td>
        <td><a href='ubahstatus.php?id=$aidi'><button class='btn btn-outline-success'>Ubah Status</button></td>

      </tr>";
    }
} else {
    $txlist2 = "Tidak Ada Transaksi";
}
?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
  <h1 class="d-none d-lg-block d-md-block">Transaksi Pembelian</h1>
    <h3 class="d-block d-lg-none d-md-none ">Transaksi Pembelian</h3>
  <hr>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">TxID</th>
          <th scope="col">Penerima</th>
            <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Status</th>
          <th scope="col">Harga</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php echo $txlist ?>

      </tbody>
    </table>
  </div>
<hr>
<h1 class="d-none d-lg-block d-md-block">Transaksi Penjualan</h1>
  <h3 class="d-block d-lg-none d-md-none ">Transaksi Penjualan</h3>
<hr>
<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">TxID</th>
        <th scope="col">Penerima</th>
          <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Status</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php echo $txlist2 ?>

    </tbody>
  </table>
</div>


<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>

<?php
require_once "modular/footer.php" ?>
