<?php  
require "functions_no4b.php";
$id		= $_GET['id'];


if($id > 100){
	$query = "SELECT * FROM  kabupaten_tb WHERE id = '$id'";
	$result = tampil($query);
}else{
	$query = "SELECT * FROM  provinsi_tb WHERE id = '$id'";
	$result = tampil($query);
}

if(isset($_POST['hapus'])){
	if(hapus($id) > 0){
		echo "
				<script> alert('Data Berhasil DiHapus');
						 document.location.href = 'index_4b.php' ;
				</script>
			";
		}else{
				echo "
				<script> alert('Data Gagal DiHapus');
						 document.location.href = 'index_4b.php';
				</script>
			";
		}

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
 			<div class="contentbuy">
 				<img src="<?= $r['foto']; ?>">
 				<h6><?= $r['nama']; ?></h6>
 				<p><?= $r['diresmikan']; ?></p>
 				<?php if($r['id'] < 100){ ?>
 				<p><?= $r['pulau']; ?></p><br>
 			<?php } ?>
 				<form method="POST">
 					<button name="hapus">Hapus</button>
 					<a href="editprov_4b.php?id=<?= $r['id']?>">Edit</a>
 				</form>
 		</div>
 		<?php endforeach ?>
		</div>
	</div>

</body>
</html>