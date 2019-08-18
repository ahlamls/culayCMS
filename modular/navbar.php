<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
<a class="navbar-brand mr-auto mr-lg-0" href="index.php"><img src="assets/image/logo-gloftech.png" class="navlogo">  </a>
<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
<span class="navbar-toggler-icon"></span>
</button>

<div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav mr-auto">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="text" placeholder="Cari Barang.." aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
  </form>
</ul>
<div class="form-inline my-2 my-lg-0 navbar-nav">
<li class="nav-item">
  <a class="nav-link" href="index.php">Beranda</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">Cara Kerja</a>
</li>
<li class="nav-item">
<div class="nav-link">
</li>
<?php

if (!$login) {?>
<li class="nav-item">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#LoginModal">
  Daftar atau Masuk
  </button>
</li>
<?php } else {
$saldo = 0;
$sql = "SELECT saldo FROM `user` WHERE `id` = $uid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $saldo = $row['saldo'];
    }
} else {
  $saldo = 0;
}
$conn->close();

  ?>
<li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="far fa-user"></i> <?php echo $uname ?>
     </a>
     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item"  href="saldo.php"><b>Saldo: Rp <?php echo number_format($saldo) ?></b></a>
       <a class="dropdown-item" href="trx.php">Transaksi</a>
       <div class="dropdown-divider"></div>
       <a class="dropdown-item" href="logout.php">Logout</a>
     </div>
   </li>
</div>

<li class="nav-item">
  <a href="post.php"><button type="button" class="btn btn-success">
  Post
</button></a>
</li>
</div>
<?php } ?>


</div>
</nav>

<div class="nav-scroller bg-white shadow-sm">
<nav class="nav nav-underline">

<a class="nav-link" href="#">Makanan/Minuman</a>
<a class="nav-link" href="#">Koleksi</a>
<a class="nav-link" href="#">Teknologi</a>
<a class="nav-link" href="#">Fashion</a>
<a class="nav-link" href="#">Olahraga</a>
<a class="nav-link" href="#">Kecantikan</a>
<a class="nav-link" href="#">Rumah Tangga</a>
</nav>
</div>
