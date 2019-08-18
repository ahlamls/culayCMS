<?php
//session_start();
require_once "koneksi.php";
$login=FALSE;
$uid = $_SESSION['uid'];
$uname = $_SESSION['name'];
// die($_SESSION['uid']);
if(!isset($uid)){
  $login=FALSE;
}else {
  $login=TRUE;
//  $uname="GakLogin";
}

function haruslogin(){
  global $login;
  if (!$login) {
    header("Location: index.php");
    die();
  }
}

//die($login);
 ?>
