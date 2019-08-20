<?php
require_once "modular/header.php";
haruslogin();
$sql = "SELECT saldo FROM user WHERE `id` = $uid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $saldo = $row['saldo'];
    }
} else {
    $saldo = 0;
}
?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
  <h1 class="d-none d-lg-block d-md-block">Saldo</h1>
    <h3 class="d-block d-lg-none d-md-none ">Saldo</h3>
  <hr>
<center><h1>Rp <?php echo number_format($saldo)?></h1>
<p>Saldo Gloftech</p>
<hr>
<div class="row">
<button type="button" class="col-6 w-100 btn btn-outline-success" data-toggle="modal" data-target="#TopModal">Top Up</button>
<button type="button" class="col-6 w-100 btn btn-outline-danger" data-toggle="modal" data-target="#TopModal">Withdraw</button>
</div>
</center>


<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>

<?php
require_once "modular/footer.php" ?>
