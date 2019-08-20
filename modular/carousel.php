<?php
$sql = "SELECT gambar FROM kota";
$result = $conn->query($sql);
$carousel = "";
$count = 1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $gambar = $row['gambar'];
      if ($count == 1){
        $active = "active";
        $count++;
      } else {
        $active = "";
      }
    $carousel .= "  <div class='carousel-item h-100 $active '>
          <img src='$gambar' class='d-block w-100 h-100' >
      </div>";
    }
} else {

}


?>
<br>
<div class="pesbarimg">
<div id='pesbarimgx carouselExampleSlidesOnly' data-interval="2000" class='carousel slide' style="margin:0 ;height:175px;border-radius:10px;" data-ride='carousel'>
  <div class='carousel-inner h-100' style="border-radius:10px;" >
<?php echo $carousel ?>

  </div>
</div>
<div class="pesbarimgtext xpad">
  <h3 class="" style="margin-top:20px;">Mau Titip Belanja?</h3>
  <center><form class="" action="produklist.php" action="POST">
    <input class="form-control w-100" style="max-width:500px; margin-bottom:10px;"type="text" name="search" placeholder="Cari Barang Disini" aria-label="Search">
    <button class="btn btn-outline-success " style="" type="submit"><i class="fas fa-search"></i> Cari</button>
  </form></center>
  </div>
</div>
