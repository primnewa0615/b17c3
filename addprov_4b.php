<?php 
require "functions_no4b.php";
	if (isset($_POST['input'])) {
		if(inputprov($_POST) > 0){
			echo "
				<script> alert('Data Berhasil Ditambahkan');
						 document.location.href = 'index_4b.php' ;
				</script>
			";
		}else{
				echo "
				<script> alert('Data Gagal Ditambahkan');
						 document.location.href = 'index_4b.php';
				</script>
			";
		}
	
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>addprov_4b</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="navbar">
		<div class="kiri">
			<h1><b>Provinsi & Kabupaten</b></h1>
		</div>
		<form method="POST">
		<div class="kanan">
			
		
			
			<a href="addprov_4b.php">Add Provinsi</a>
			<a href="addkab_4b.php">Add Kabupaten</a>
		</div>
		</form>
	</div>

<form method="POST">
	<div class="wrapinputgenre">
		<h1><center>Tambah Provinsi</center></h1>
		<br><br>
		<div class="genreinput">
			<table>
				<tr>
					<td><label for="provinsi">Nama Provinsi</label></td>
					<td><input type="text" name="provinsi"><br></td>
				</tr>
				<tr>
					<td><label for="foto">Foto</label></td>
					<td><input type="text" name="foto"><br></td>
				</tr>
				<tr>
					<td><label for="diresmikan">Tanggal Diresmikan</label></td>
					<td><input type="date" name="diresmikan"><br></td>
				</tr>
				<tr>
					<td><label for="pulau">Nama Pulau</label></td>
					<td><input type="text" name="pulau"><br></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit" name="input" >Input</button></td>
				</tr>
			</table>
			
			
			
			
			
			
			
			
			
		</div>
	</div>
</form>
</body>
</html>