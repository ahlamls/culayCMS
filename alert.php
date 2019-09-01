<?php
require_once "modular/header.php";

if ($_GET['id'] == 1) {
  $bege = "border-danger";
  $text = "text-danger";
} else {
    $bege = "border-success";
$text = "text-success";
}
?>
<body class="bg-light">
<?php require_once "modular/navbar.php"?>

<main role="main" class="container">
<br>
<div class="card <?php echo $bege ?> mb-3 w-100" >
<div class="card-header">Peringatan</div>
<div class="card-body">
  <h5 class="card-title <?php echo $text ?>"><?php echo htmlentities($_GET['msg'])?></h5>
  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
</div>
</div>
<hr>

</main>

<?php echo $kotalist2 ?>
<?php
require_once "modular/footer.php" ?>
