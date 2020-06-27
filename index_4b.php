<?php  
require "functions_no4b.php";

$query = "SELECT * FROM provinsi_tb";
$result = tampil($query);

if(isset($_POST['cari'])){
	$pilih = $_POST['pilih'];
	$query = "SELECT * FROM $pilih ";
	$result = tampil($query);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="navbar">
		<div class="kiri">
			<h1><b>Provinsi & Kabupaten</b></h1>
		</div>
		<form method="POST">
		<div class="kanan">
			
			<select name="pilih">
			<option value="">--Pilih--</option>
			<option value="kabupaten_tb">Kabupaten</option>
			<option value="provinsi_tb">Provinsi</option>
			</select>

			<button name="cari">Cari</button>
			
			<a href="addprov_4b.php">Add Provinsi</a>
			<a href="addkab_4b.php">Add Kabupaten</a>
					</div>
		</form>
	</div>
	<div class="container">
		<?php foreach ($result as $r) :?>
 			<div class="content">
 				<img src="<?= $r['foto']; ?>">
 				<h6><?= $r['nama']; ?></h6>
 				<p><?= $r['diresmikan']; ?></p>
 				<button><a href="detail_4b.php?id=<?= $r['id'] ?>">Detail</a></button>
 		</div>
 		<?php endforeach ?>
	<div>
	

</body>
</html>