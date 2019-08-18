<?php
require_once "session.php";
haruslogin();
$type = eskep($_POST['type']);
$name = eskep($_POST['name']);
$desk = eskep($_POST['desk']);
$kat = eskep($_POST['kat']);
$kota = eskep($_POST['kota']);
$qty = eskep($_POST['qty']);
$harga= eskep($_POST['harga']);
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "data/image/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    // echo "Upload berhasil!<br/>";
  $file = $dirUpload.$namaFile;
    $sql = "INSERT INTO `produk` (`id`, `judul`, `desk`, `harga`, `type`, `qty`, `gambar`, `kota_id`, `kat_id`, `user_id`) VALUES (NULL, '$name', '$desk', '$harga', '$type', '$qty', '$file', '$kota', '$kat', '$uid');";

if ($conn->query($sql) === TRUE) {
  header("Location: alert.php?id=1&msg=Produk berhasil dibuat!");
  die();
} else {
  header("Location: alert.php?id=1&msg=UGagal membuat produk " . $conn->error);
  die();
}

$conn->close();
} else {
  header("Location: alert.php?id=1&msg=Upload Gagal");
  die();
}

?>
