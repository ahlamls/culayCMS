<?php
require_once "session.php";

$username = eskep($_POST['emailx']);
$password = eskep(md5(md5(sha1(md5(sha1(md5($_POST['password'])))))));

$sql = "SELECT id , name FROM user WHERE `email` = '$username' AND `password` = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          $_SESSION['uid'] = $row['id'];
          $_SESSION['name'] = $row['name'];
          header("Location: index.php");
          die();
    }
} else {
    header("Location: alert.php?id=1&msg=Username Atau Password Salah . silahkan coba lagi" . $conn->error);
    die();
}
$conn->close();
?>
