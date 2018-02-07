<?php
	session_start();

	if(isset($_SESSION['login'])) {
		
		include 'koneksi.php';
		
		$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
		$agama = isset($_POST['agama']) ? $_POST['agama'] : '';
		$tempat = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
		$tanggal = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
		$id = isset($_POST['id']) ? $_POST['id'] : '';
		
		$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
		
		if(!empty($nama) && !empty($agama) && !empty($tempat) && !empty($tanggal) && !empty($jenis)) {
			
			mysqli_query($connect, "UPDATE warga SET nama = '$nama', tempat_lahir = '$tempat', tanggal_lahir = '$tanggal', agama = '$agama', jenis_kelamin = '$jenis' WHERE id = '$id' ");
			header("location:../home.php");
			
		} else {
			echo "Kasi lengkapki data ta <a href='../warga_tambah.php'>Warga</a>";
		}
					
	} else {
		echo "<a href='index.php'>Login</a> ki dulu";
	}

?>