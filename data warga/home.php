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
		<a href="logout.php"> Log Out </a>
		<h3>Data Warga</h3>		
		<a href="warga_tambah.php">Tambah Data</a>
		<form action="home.php" method="post">
			<label>Cari</label>
			<input type="text" name="cari">
			<input type="submit" value="cari">			
		</form>
		<table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Jenis Kelamin</th>             
                  <th>Aksi</th>
                </tr>
				
				<?php
					include 'proses/koneksi.php';
					
					if(!empty($_POST['cari'])) {
						$cari = $_POST['cari'];
						$warga = mysqli_query($connect, "SELECT * FROM warga WHERE warga.nama as nama_warga LIKE '%".$cari."%' ");				
						$no = 1;
						while($row = mysqli_fetch_array($warga)) {
						echo "	
						<tr>
						<td>".$no++."</td>
						<td>".$row['nama_warga']."</td>
						<td>".$row['tempat_lahir']."</td>
						<td>".date("d F Y", strtotime($row['tanggal_lahir']))."</td>
						<td>".$row['agama']."</td>
						<td>".(($row['jenis_kelamin'] == 'l') ? 'Laki-laki' : 'Perempuan')."</td>										
						<td>
							<a class='btn btn-info btn-xs' href='warga_edit.php?ID=$row[id_warga]'><i class='fa fa-pencil'></i>Edit</a>
							<a class='btn btn-danger btn-xs delete' href='proses/warga_proses_hapus.php?ID=$row[id_warga]'>Hapus<i class='fa fa-trash-o'></i></a>
						</td>
						";
					}
					} else {
					$sql = mysqli_query($connect, "SELECT *, warga.id as id_warga, warga.nama as nama_warga FROM warga");
					$no = 1;
					while($row = mysqli_fetch_array($sql)) {
						echo "	
						<tr>
						<td>".$no++."</td>
						<td>".$row['nama_warga']."</td>
						<td>".$row['tempat_lahir']."</td>
						<td>".date("d F Y", strtotime($row['tanggal_lahir']))."</td>
						<td>".$row['agama']."</td>
						<td>".(($row['jenis_kelamin'] == 'l') ? 'Laki-laki' : 'Perempuan')."</td>										
						<td>
							<a class='btn btn-info btn-xs' href='warga_edit.php?ID=$row[id_warga]'><i class='fa fa-pencil'></i>Edit</a>
							<a class='btn btn-danger btn-xs delete' href='proses/warga_proses_hapus.php?ID=$row[id_warga]'>Hapus<i class='fa fa-trash-o'></i></a>
						</td>
						";
					}
					}					
				?>
		</table>
	</body>
	
</html>

<?php
} else {
  echo "<a href='index.php'>login</a> ki dulu.";
}
?>