<?php
require_once "session.php";
haruslogin();
$aidix = eskep($_POST['id']);
$nama = eskep($_POST['name']);
$alamat = eskep($_POST['alamat']);


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


$sql = "SELECT * FROM produk  WHERE `id` = $aidix";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $gambar = $row['gambar'];
      $judul = $row['judul'];
      $harga = number_format($row['harga']);
      $hargaori = $row['harga'];
      if ($row['harga'] > $saldo) {
        header("Location: alert.php?id=1&msg=Saldo Tidak Cukup" );
        die();
      }
      $qty = $row['qty'];
      $desk = $row['desk'];
      $kategori_id = $row['kat_id'];
      $kota_id = $row['kota_id'];
      $user_id = $row['user_id'];

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


$sql = "UPDATE `user` SET `saldo` = `saldo` - $hargaori WHERE `user`.`id` = $uid;";

if ($conn->query($sql) === TRUE) {

} else {
  header("Location: alert.php?id=1&msg=Gagal Membeli Produk (1)" . $conn->error);
  die();
}

$sql = "UPDATE `user` SET `saldo` = `saldo` + $hargaori WHERE `user`.`id` = $user_id;";

if ($conn->query($sql) === TRUE) {

} else {
  header("Location: alert.php?id=1&msg=Gagal Membeli Produk (2)" . $conn->error);
  die();
}

$sql = "INSERT INTO `transaksi` (`id`, `penerima`, `nama` , `alamat`, `produk_id`, `penjual_id`, `pembeli_id`, `status`,`harga`) VALUES (NULL, '$nama', '$alamat', '$judul' ,  '$aidix', '$user_id', '$uid', 'Menunggu Diproses Penjual','$hargaori');";

if ($conn->query($sql) === TRUE) {
  header("Location: alert.php?id=2&msg=Pembelian $judul Seharga $harga Telah Berhasil . Silahkan cek menu transaksi!");
  die();
} else {
  header("Location: alert.php?id=1&msg=Gagal Membeli Produk " . $conn->error);
  die();
}
?>
