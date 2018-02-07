<?php
session_start();
if(isset($_SESSION['login'])) {

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
	<p><?php echo $_SESSION['nama']; ?></p>
	
	<form action="proses/warga_proses_tambah.php" method="post">
	
		<label>Nama </label>
			<input type="text" name="nama" placeholder="Kasi masukki nama">
		<br /><br />
		
		<label>Tempat Lahir : </label>
			<input type="text" name="tempat_lahir" placeholder="Kasi masukki tempat lahir">
		<br /><br />
		
		<label>Tanggal Lahir : </label>
			<input type="text" name="tanggal_lahir" placeholder="Kasi masukki tanggal lahir">
		<br /><br />
		
		<label>Agama : </label>
			<input type="text" name="agama" placeholder="Kasi masukki agama">
		<br /><br />
		
		<label>Jenis Kelamin : </label>
			<label>
				<input type="radio" name="jenis" value="l" checked>
				Laki - Laki
			</label>
			<label>
				<input type="radio" name="jenis" value="p">
				Perempuan
			</label>
		<br /><br />
		
		<a href="home.php">Cancel</a>
		<button type="submit">Submit</button>
	</form>
	
	</body>
	
</html>

<?php
} else {
  echo "<a href='index.php'>login</a> ki dulu";
}
?>