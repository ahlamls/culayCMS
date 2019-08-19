<?php
//session_start();
require_once "koneksi.php";
$login=FALSE;
if (isset($_SESSION['name'])) {
  $uname = $_SESSION['name'];
}


// die($_SESSION['uid']);
if(!isset($_SESSION['uid'])){
  $login=FALSE;
}else {
  $login=TRUE;
  $uid = $_SESSION['uid'];
//  $uname="GakLogin";
}

function haruslogin(){
  global $login;
  if (!$login) {
    header("Location: alert.php?id=1&msg=Kamu Belum Login . Silahkan login terlebih dahulu");
    die();
  }
}

//die($login);
 ?>
