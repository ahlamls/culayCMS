<?php
require_once "modular/header.php";

haruslogin();

$katlist = "";
$kotalist = "";

$sql = "SELECT * FROM kategori";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $aidi = $row['id'];
      $nama = $row['nama'];
    $katlist .= "<option value='$aidi'>$nama</option>";
    }
} else {
    die("Tidak ada kategori");
}


$sql = "SELECT id , nama FROM kota";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $aidi = $row['id'];
      $nama = $row['nama'];
    $kotalist .= "<option value='$aidi'>$nama</option>";
    }
} else {
    die("Tidak ada kota");
}
?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
  <h1 class="d-none d-lg-block d-md-block">Post Baru</h1>
    <h3 class="d-block d-lg-none d-md-none ">Post Baru</h3>
  <hr>
        <form action="tambahproduk.php" method="post" enctype="multipart/form-data">
          <div class="row">
    <div class="form-group col-xs-12 col-md-6">

 <label for="type">Jenis</label>
 <select class="form-control" name="type" id="type" required="">
   <option selected disabled>Pilih salah satu</option>
   <option value="0">Request</option>
   <option value="1">Tawaran</option>
 </select>
</div>
    <div class="form-group col-xs-12 col-md-6">
          <label for="name">Nama Barang</label>
            <input type="text" name="name" class="form-control" id="name" required="">
          </div>
              <div class="form-group col-12">
          <label for="desk">Deskripsi</label>
            <textarea type="text" name="desk" class="form-control" id="desk" required=""></textarea>
          </div>
              <div class="form-group col-xs-12 col-md-6">
          <label for="kat">Kategori</label>
          <select class="form-control" name="kat" id="kat" required="">
            <option selected disabled>Pilih salah satu</option>
            <?php echo $katlist ?>

          </select>
         </div>
             <div class="form-group col-xs-12 col-md-6">
         <label for="kota">Kota</label>
         <select class="form-control" name="kota" id="kota" required="">
           <option selected disabled>Pilih salah satu</option>
           <?php echo $kotalist ?>

         </select>
        </div>
        <div class="form-group col-xs-6 col-md-3">
    <label for="qty">Jumlah Barang</label>
        <input type="number" name="qty" class="form-control" id="qty" required="">

   </div>
   <div class="form-group col-xs-6 col-md-3">
<label for="qty">Harga Barang</label>
   <input type="number" name="harga" class="form-control" id="harga" required="">

</div>
    <div class="form-group col-xs-12 col-md-6">
         <label for="berkas">Pilih Foto</label><br>
    <input type="file" name="berkas" id="berlas" required=""/>
</div>
</div>
<br>
<button type="submit" class="btn w-100 btn-success">Posting Barang</button>
</form>
<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>

<?php
require_once "modular/footer.php" ?>
