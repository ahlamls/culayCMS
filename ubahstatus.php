<?php
require_once "modular/header.php";

haruslogin();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $aidixx = eskep($_POST['id']);
  $statusx = eskep($_POST['status']);
$sql = "UPDATE `transaksi` SET `status` = '$statusx' WHERE `transaksi`.`id` = $aidixx;";

if ($conn->query($sql) === TRUE) {
  header("Location: alert.php?id=2&msg=Sukses merubah status");
  die();
} else {
  header("Location: alert.php?id=1&msg=Gagal merubah status" . $conn->error);
  die();
}
} else {

  $katlistx = "";
  $kotalist = "";

  $aidix = eskep($_GET['id']);
    $sql = "SELECT status FROM `transaksi` WHERE `penjual_id` = $uid AND `id` = $aidix";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $status = $row['status'];
      }
  } else {
      die("Tidak Valid");
  }
}


?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
  <h1 class="d-none d-lg-block d-md-block">Ubah Status</h1>
    <h3 class="d-block d-lg-none d-md-none ">Ubah Status</h3>
  <hr>
        <form action="" method="post">
          <div class="row">
    <div class="form-group col-12">
<input type="hidden" name="id" value="<?php echo $aidix ?>">
          <label for="status">Status :</label>
            <input type="text" name="status" class="form-control" value="<?php echo $status?>" id="status" required="">
          </div>

</div>
<br>
<button type="submit" class="btn w-100 btn-outline-success">Posting Barang</button>
</form>
<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>

<?php
require_once "modular/footer.php" ?>
