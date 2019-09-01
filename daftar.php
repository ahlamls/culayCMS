<?php
require_once "session.php";

$nama = eskep($_POST['nama']);
$username = eskep($_POST['username']);
$email = eskep($_POST['email']);
$password = eskep(md5(md5(sha1(md5(sha1(md5($_POST['password'])))))));

$sql = "
INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `saldo`) VALUES (NULL, '$username', '$nama', '$email', '$password', '0');";

if ($conn->query($sql) === TRUE) {
  header("Location: alert.php?id=2&msg=Sukses Mendaftar . silahkan login" . $conn->error);
  die();
} else {
  header("Location: alert.php?id=1&msg=Username Atau Password Salah . silahkan coba lagi" . $conn->error);
  die();
}
$conn->close();
?>
