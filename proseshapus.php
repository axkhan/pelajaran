<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblondry";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_GET['idx_param'];


$sql = "DELETE FROM tblpelanggan WHERE id=$id";
if ($conn->query($sql) === TRUE) {
	header("location:tambah.php");
} else {
  echo "Gagal menghapus data: " . $conn->error;
}


$conn->close();


?>