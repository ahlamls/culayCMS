<?php
require_once "modular/header.php";
?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
  <h1 class="d-none d-lg-block d-md-block">Post Baru</h1>
    <h3 class="d-block d-lg-none d-md-none ">Post Baru</h3>
  <hr>
  <form>
    <div class="form-group">

 <label for="type">Jenis</label>
 <select class="form-control" name="type" id="type" required="">
   <option selected disabled>Pilih salah satu</option>
   <option value="0">Request</option>
   <option value="1">Tawaran</option>
 </select>
</div>
    <div class="form-group">
          <label for="name">Nama Barang</label>
            <input type="text" name="name" class="form-control" id="name" required="">
          </div>
              <div class="form-group">
          <label for="desk">Deskripsi</label>
            <textarea type="text" name="desk" class="form-control" id="desk" required=""></textarea>
          </div>
          <label for="type">Kategori</label>
          <select class="form-control" name="type" id="type" required="">
            <option selected disabled>Pilih salah satu</option>
            <option value="0">Makanan</option>
            <option value="1">Teknologi</option>
          </select>
         </div>
         <label for="type">Kota</label>
         <select class="form-control" name="type" id="type" required="">
           <option selected disabled>Pilih salah satu</option>
           <option value="0">Bogor</option>
           <option value="1">Bandung</option>
         </select>
        </div>

<br>
<button type="submit" class="btn w-100 btn-success">Posting Barang</button>
</form>
<hr>
Powered By culayCMS . GitHub -> <a href="https://github.com/ahlamls/culayCMS">https://github.com/ahlamls/culayCMS</a>
</main>

<?php
require_once "modular/footer.php" ?>
