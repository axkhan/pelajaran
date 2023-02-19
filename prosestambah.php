<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblondry";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$nama=$_POST['txtnama'];
$jekel=$_POST['txtjekel'];
$ttl=$_POST['txtttl'];
$alamat=$_POST['txtalamat'];

$sql = "INSERT INTO tblpelanggan (nama, jekel, ttl, alamat)
VALUES ('$nama', '$jekel', '$ttl', '$alamat')";

if ($conn->query($sql) === TRUE) {
  header("location:tambah.php");
} else {
  echo "Error tambah data: " . $sql .  $conn->error;
}

$conn->close();
?>