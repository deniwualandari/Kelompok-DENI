<html>
<head>
	<title>CETAK</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN BARANG</h2>
		<h4>WWW.MALASNGODING.COM</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Tanggal</th>
			<th>Perihal </th>
			<th width="5%">Jumlah</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($conn,"SELECT * FROM barang_masuk where  id ='$id'");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['perihal']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>