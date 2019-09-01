<?php
require_once "modular/header.php";

//WAJIB DIGANTI PASSNYA
if ($_GET['assalamualaikum'] !== "kadalmiramar69"){
  header("Location: index.php");
  die();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user = eskep($_POST['user']);
  $saldo = eskep($_POST['saldo']);
  $sql = "UPDATE `user` SET `saldo` = '$saldo' WHERE `user`.`id` = $user;";

  if ($conn->query($sql) === TRUE) {
    die("Record updated successfully");
  } else {
    die("Error updating record: " . $conn->error);
  }
} else {
$userlist = "";
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $aidi = $row['id'];
      $name = $row['name'];
      $username = $row['username'];
      $saldo = number_format($row['saldo']);
    $userlist .= "<option value='$aidi'>$name - $username - Saldo : $saldo </option>";
    }
} else {
    die("Tidak ada kategori");
}

}

?>
<h1>Gloftech Saldo Generator</h1>
<form method="POST">
    <div class="form-group">
<label for="user">User : </label>
<select class="form-control" name="user" id="user" required="">
  <option selected disabled>Pilih salah satu</option>
  <?php echo $userlist ?>

</select>
</div>
<div class="form-group">
<label for="saldo">Set Saldo (Rp)</label>
<input type="number" name="saldo" class="form-control" id="saldo" required="">

</div>

<button type="submit" class="btn-outline-success">Submit</button>
</form>
