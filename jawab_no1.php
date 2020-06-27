<?php 
 function Hitungbarang($barang, $qty){
 	if($barang == 'A' OR $barang == 'B' OR $barang == 'C'){
 	if($barang == 'A'){
 		if($qty > 13){
 			$A 			= 4550;
 			$total		= 4550 * $qty;
 			$potongan	= 231 * $qty;
 			$totalBayar	= $total - $potongan;

 			return $hasil = array('total' => $total, 'potongan' => $potongan, 'totalBayar' => $totalBayar);
 			// echo "Total Harga Barang : ".$total."<br>";
 			// echo "Potongan : ".$potongan."<br>";
 			// echo "Total yang harus dibayar : "."<br>";
 		}else{
 			$A 			= 4550;
 			$total		= 4550 * $qty;
 			$potongan	= 0 * $qty;
 			$totalBayar	= $total - $potongan;

 			return $hasil = array('total' => $total, 'potongan' => $potongan, 'totalBayar' => $totalBayar);
 		}
 	}else if($barang == 'B'){
 		if($qty > 7){
 			$B 			= 5330;
 			$total		= 5330 * $qty;
 			$potongan	= $total * 23/100;
 			$totalBayar	= $total - $potongan;

 			return $hasil = array('total' => $total, 'potongan' => $potongan, 'totalBayar' => $totalBayar);
 		}else{
 			$B			= 5330;
 			$total		= 5330 * $qty;
 			$potongan	= $total * 0;
 			$totalBayar	= $total - $potongan;

 			return $hasil = array('total' => $total, 'potongan' => $potongan, 'totalBayar' => $totalBayar);
 		}
 	}else if($barang == 'C'){
 			$C			= 8643;
 			$total		= 8643 * $qty;
 			$potongan	= $total * 0;
 			$totalBayar	= $total - $potongan;

 			echo "Total Harga Barang : ".$total."<br>";
 			echo "Potongan : ".$potongan;
 			echo "Total yang harus dibayar : "."<br>";
 	}
 	}else{
 		echo "Tidak ada barang dengan nama : ".$barang;;
 	}
 }
if (isset($_POST['submit'])) {
		$nmBarang 	= $_POST['nmBarang'];
		$qty		= $_POST['qty'];

		 $result = Hitungbarang($nmBarang, $qty);
	
	}	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Jawaban no 1</title>
 </head>
 <body>
 	<table border="1px solid black" >
 		<tr>
 			<td>Nama Barang</td>
 			<td>Harga</td>
 		</tr>
 		<tr>
 			<td><center>A</center></td>
 			<td><center>4550</center></td>
 		</tr>
 		<tr>
 			<td><center>B</center></td>
 			<td><center>5330</center></td>
 		</tr>
 		<tr>
 			<td><center>C</center></td>
 			<td><center>8653</center></td>
 		</tr>
 	</table><br><br>

 	<form method="POST">
 		<table>
 			<tr>
 				<td><label for="nmBarang">Pilih Barang</label></td>
 				<td><select name="nmBarang">
 						<option value="">-Pilih Barang-</option>
 						<option value="A">A</option>
 						<option value="B">B</option>
 						<option value="C">C</option>
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td><label for="qty"> Jumlah barang</label></td>
 				<td><input type="number" name="qty"><br> </td>
 			</tr>
 			<tr>
 				<td></td>
 				<td><button name="submit">Submit</button></td>
 			</tr>
 		</table>	 		
 	</form>
 	<br><br><br>
 	<div style="border: 1px solid black;">
 	<table>
 		<tr>
 			<td><b>Total</b></td>
 			<td> :&nbsp;Rp.&nbsp;<?= $result['total'] ?></td>
 		</tr>
 		<tr>
 			<td><b>Potongan</b></td>
 			<td> :&nbsp;Rp.&nbsp;<?= $result['potongan'] ?></td>
 		</tr>
 		<tr>
 			<td><b>Total Bayar</b></td>
 			<td> :&nbsp;Rp.&nbsp;<?= $result['totalBayar'] ?></td>
 		</tr>
 	</table>
 	</div>
 	
 
 </body>
 </html>