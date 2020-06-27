<?php 
require "functions_no4b.php";
$id		= $_GET['id'];
if($id < 100){
	$query = "SELECT * FROM  provinsi_tb WHERE id = '$id'";
	$result = tampil($query);
}else{
	$query = "SELECT * FROM  kabupaten_tb WHERE id = '$id'";
	$result = tampil($query);
}

	if (isset($_POST['Edit'])) {
		if(editprov($_POST) > 0){
			echo "
				<script> alert('Data Berhasil DiEdit');
						 document.location.href = 'index_4b.php' ;
				</script>
			";
		}else{
				echo "
				<script> alert('Data Gagal DiEdit');
						
				</script>
			";
		}
	
	}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>editprov_4b</title>
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
			
			<a href="addprov_no4b.php">Add Provinsi</a>
			<a href="addkab_no4b.php">Add Kabupaten</a>
		</div>
		</form>
	</div>

<form method="POST">
	<div class="wrapinputgenre">
		<h1><center>Tambah Provinsi/Kabupaten</center></h1>
		<br><br>
		<div class="genreinput">
			<?php foreach ($result as $r):?>
				<input type="hidden" name="id" value="<?= $r['id'] ?>">
			<table>
				<tr>
					<td><label for="nama">Nama Provinsi</label></td>

					<td><input type="text" name="nama" value="<?= $r['nama'] ?>"><br></td>
				</tr>
				<tr>
					<td><label for="foto">Foto</label></td>
					<td><input type="text" name="foto" value="<?= $r['foto'] ?>"><br></td>
				</tr>
				<tr>
					<td><label for="diresmikan">Tanggal Diresmikan</label></td>
					<td><input type="date" name="diresmikan" value="<?= $r['diresmikan'] ?>"><br></td>
				</tr>
				<?php if($r['id'] < 100){ ?>
				<tr>
					<td><label for="pulau">Nama Pulau</label></td>
					<td><input type="text" name="pulau" value="<?= $r['pulau'] ?>"><br></td>
				</tr>
			<?php }else{ ?>
				<tr>
					<td><label for="provinsi_id">ID Provinsi</label></td>
					<td><input type="number" name="provinsi_id" value="<?= $r['provinsi_id'] ?>"><br></td>
				</tr>
			<?php } ?>
				<tr>
					<td></td>
					<td><button type="submit" name="Edit" >Input</button></td>
				</tr>
			</table>
		<?php endforeach; ?>
			
			
			
			
			
			
			
			
			
		</div>
	</div>
</form>
</body>
</html>