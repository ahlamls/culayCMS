<?php
require_once "session.php";
$aidix = eskep($_GET['id']);
$sql = "DELETE FROM produk WHERE id=$aidix AND user_id = $uid";
haruslogin();
if ($conn->query($sql) === TRUE) {
  header("Location: alert.php?id=2&msg=Produk berhasil dihapus!");
  die();
} else {
  header("Location: alert.php?id=1&msg=Gagal Menghapus Produk" . $conn->error);
  die();
}
?>
