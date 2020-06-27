<?php 
function drawImage($sisi){
	if(!($sisi % 2 == 1)){
		echo "<script> alert('Sisi Harus Bilangan Ganjil!!'); </script>";
	}else{
		for ($i=0 ; $i < $sisi ; $i++ ) { 
			for ($j=0; $j < $sisi ; $j++) { 
				if(($i == 0) OR ($i==($sisi-1))){
					if(($j == 0) OR ($j==(round(($sisi/2)-1))) OR ($j==($sisi-1))){
						echo "&nbsp; * &nbsp;";
					}else{
						echo "&nbsp; # &nbsp;";
					}
				}elseif($i==(round(($sisi/2)-1))){
					if($j==(round(($sisi/2)-1))){
						echo "&nbsp; # &nbsp;";
					}else{
						echo "&nbsp; * &nbsp;";
					}
				}else{
					if($j==(round(($sisi/2)-1))){
						echo "&nbsp; * &nbsp;";
					}else{
						echo "&nbsp; # &nbsp;";
					}
				}
			}

			echo "<br>";
		}
	}
}



if(isset($_POST['submit'])){
	$sisi = $_POST['sisi'];
	drawImage($sisi);
}


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Jawaban Soal No 3</title>
</head>
<body>
	<div style="
				margin: 20px auto;
				padding: 10px;
				border: 1px solid black;
				width: 300px;
	">
	<form method="POST">
		<label for="sisi">Masukan Sisi Pattern  :</label><br><br>
		<input type="number" name="sisi"><br><br>
		<button name="submit">Creat</button>
	</form>
	</div>

</body>
</html>