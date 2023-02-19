<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Design Mulai dari 0</title>

<style type="text/css">
body{
}


.tampungsemua{
	width: 1200px;
	margin-left: auto;
	margin-right: auto;
}

table{
	border-collapse: collapse;
}

table tr{
	height: 30px;
}

.gbr1{
	width: 100%;
	height: 120px;
	border-top-left-radius: 20px;
	border-top-right-radius: 20px;
}

.men{
	background-color: #000;
	margin-top: -5px;
	padding: 13px;
}

.link1{
	padding: 12px 15px;
	color: #fff;
	background-color:#000;
	text-decoration: none;
}

.link1:hover{
	background-color: #069;
	color: #fff;
}

.midL{
	width: 400px;
	float: left;
	height: 400px;
	padding: 10px;
}

.midR{
	width: 740px;
	float: right;
	height: 400px;
	padding: 10px;
}

.fot{
	height: 70px;
	background-color: #000;
	color: #fff;
	text-align: center;
	padding: 14px 10px;
	border-bottom-left-radius: 20px;
	border-bottom-right-radius: 20px;
}

.clr{
	clear: both;
}

</style>


</head>

<body>


<div class="tampungsemua">
<div class="hed">
<img class="gbr1" src="gambar1.png">
</div>
<div class="men">
<a class="link1" href="#">Beranda</a><a class="link1" href="tambah.php">Tambah Data</a>
</div>
<div class="midL">
<strong>TAMBAH DATA PELANGGAN</strong>
<table>
<form method="post" action="prosestambah.php" enctype="multipart/form-data">
<tr><td>Nama</td><td>:</td><td><input type="text" name="txtnama"></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td>
<select name="txtjekel">
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>

</td></tr>
<tr><td>TTL</td><td>:</td><td><input type="text" name="txtttl"></td></tr>
<tr><td>Alamat</td><td>:</td><td><input type="text" name="txtalamat"></td></tr>
<tr><td></td><td></td><td><input type="submit" value="Submit"><input type="reset" value="Reset"></td></tr>
</form>

</table>

</div>


<div class="midR">
<strong>TABEL PELANGGAN</strong>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblondry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$no=0;
echo("<font size='+1'><table border=0 width=100%>");
echo("<tr bgcolor=#0066FF>
<td>No</td>
<td>Proses</td>
<td>id</td>
<td>Nama</td>
<td>Jenis Kelamin</td>
<td>TTL</td>
<td>Alamat</td>
</tr>");



$sql = "SELECT * FROM tblpelanggan ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    
	$no++;
if($no%2==0){
	$bg='#00CCFF';
}else{
	$bg='#fff';
}
echo("<tr bgcolor=$bg><td valign=top>$no</td><td valign=top><a style=text-decoration:none; href=\"proseshapus.php?idx_param=$row[id]\">Hapus</a></td>
<td valign=top>$row[id]</td>
<td valign=top>$row[nama]</td>
<td valign=top>$row[jekel]</td>
<td valign=top>$row[ttl]</td>
<td valign=top>$row[alamat]</td>
</tr>");

	
  }
} else {
  echo "Tidak ada data";
}

echo ("</table>");

$conn->close();
?>




</div>

<div class="clr"></div>
<div class="fot">Belajar Web Pemula ke Pro @ 2022</div>
</div>



</body>
</html>
