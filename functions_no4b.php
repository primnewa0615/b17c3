<?php 

$conn	= mysqli_connect("localhost", "root", "", "provkab_db");

function tampil($query){
	global $conn;
	$result	=	mysqli_query($conn, $query);

	return $result;
}


function inputprov($data){
	global $conn;
	$nama	= htmlspecialchars($data['provinsi']);
	$foto	= htmlspecialchars($data['foto']);
	$pulau	= htmlspecialchars($data['pulau']);
	$diresmikan 	= htmlspecialchars($data['diresmikan']);



	$query 	= "INSERT INTO provinsi_tb VALUES ('', '$nama', '$diresmikan', '$foto', '$pulau')";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function inputkab($data){
	global $conn;
	$id_prov	= htmlspecialchars($data['id_prov']);
	$nama		= htmlspecialchars($data['kabupaten']);
	$foto		= htmlspecialchars($data['foto']);
	$diresmikan = $data['diresmikan'];



	$query 	= "INSERT INTO kabupaten_tb VALUES ('', '$nama', '$id_prov', '$diresmikan', '$foto')";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}


function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM provinsi_tb WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function editprov($data){
	global $conn;
	$id		= htmlspecialchars($data['id']);
	$namap	= htmlspecialchars($data['nama']);
	$fotop	= htmlspecialchars($data['foto']);
	$pulau	= htmlspecialchars($data['pulau']);
	$diresmikanp 	= htmlspecialchars($data['diresmikan']);
	$nama	= htmlspecialchars($data['nama']);
	$foto	= htmlspecialchars($data['foto']);
	$diresmikan 	= htmlspecialchars($data['diresmikan']);

	if($id < 100){
		mysqli_query($conn, "UPDATE provinsi_tb SET 
				nama = '$namap',
				diresmikan = '$diresmikanp',
				foto = '$fotop',
				pulau = '$pulau'
				WHERE id = '$id'
			");
	}else{
		mysqli_query($conn, "UPDATE kabupaten_tb SET 
				nama = '$nama',
				provinsi_id = '$provinsi_id',
				diresmikan = '$diresmikan',
				foto = '$foto'
				WHERE id = '$id'
			");
	}
	
	return mysqli_affected_rows($conn);
}

function kerjakan($data){
	global $conn;
	$id 	= $data['id'];
	$judul_s= $data['judul_sebelum'];
	$judul	= $data['judul'];
	$lokasi	= $data['lokasi'];
	$tgl_s	= $data['tanggal'];
	$ft_s	= $data['ft_sebelum'];
	$ket_s	= $data['ket_sebelum'];
	$ket 	= $data['ket'];
	$tgl 	= date('y-m-d');
	$ft_fix = upload();
	// Pindahkan data dari laporan yang di kerjakan ke tabel telah_dikerjakan

	mysqli_query($conn, "INSERT INTO laporan_telah_dikerjakan VALUES('$id', '$tgl_s', '$judul_s', '$lokasi', '$ft_s', '$ket_s')");

	// Hapus data dari lapporan yang telah di pindahkan ke tabel telah dikerjakan

	mysqli_query($conn, "DELETE FROM laporan WHERE id=$id");

	// insert data ke tabel realisasi laporan

	mysqli_query($conn, "INSERT INTO realisasi_laporan VALUES('', '$tgl', '$judul', '$lokasi', '$ft_fix', '$ket', '$id')");

	return mysqli_affected_rows($conn);
}


	
 ?>