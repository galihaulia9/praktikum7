<!DOCTYPE html>
<html>
<head>
	<title>DATA PEGAWAI</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		.lt:link, .lt:visited {
		  background-color: white;
		  color: black;
		  border: 2px solid brown;
		  padding: 2px 6px;
		  margin-left: 73%;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  border-radius: 5px;
		}

		.lt:hover, .lt:active {
		  background-color: brown;
		  color: white;
		}

		.le:link, .le:visited {
		  background-color: white;
		  color: black;
		  border: 2px solid #9384D1;
		  padding: 3px 18px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  border-radius: 5px;
		}

		.le:hover, .le:active {
		  background-color: #9384D1;
		  color: white;
		}

		.lh:link, .lh:visited {
		  background-color: white;
		  color: black;
		  border: 2px solid #262A56;
		  padding: 3px 10px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  border-radius: 5px;
		}

		.lh:hover, .lh:active {
		  background-color: #262A56;
		  color: white;
		}
	</style>
</head>
<body>
<h1 align="center" style="margin-top: 20px">Data Pegawai</h1>
<a href=tugas3tambah.php class=lt>Tambah Data Pegawai</a>
<table border="2" align="center" style="margin-top: 8px">
	<tr align="center">
		<th width="50" bgcolor="#EDF1D6">No</th>
		<th width="150" bgcolor="#EDF1D6">Nama Pegawai</th>
		<th width="150" bgcolor="#EDF1D6">Email</th>
		<th width="150" bgcolor="#EDF1D6">Jenis Kelamin</th>
		<th width="150" bgcolor="#EDF1D6">Asal</th>
		<th width="150" bgcolor="#EDF1D6">Jabatan</th>
		<th colspan="150" bgcolor="#EDF1D6">Keterangan</th>
	</tr>

	<?php
	$con = mysqli_connect("localhost","root","","datapegawai");

	$nomor=1;
	$ambildata = mysqli_query($con,"SELECT * FROM pegawai INNER JOIN gender ON pegawai.id_kelamin = gender.id_kelamin 
	INNER JOIN asal ON pegawai.id_kota = asal.id_kota
	INNER JOIN status ON pegawai.id_status = status.id_status") or die (mysqli_error($con));
	while($data = mysqli_fetch_array($ambildata)){
		echo "
		<tr align=center>
			<td>$nomor</td>
			<td>$data[NamaPegawai]</td>
			<td>$data[Email]</td>
			<td>$data[JenisKelamin]</td>
			<td>$data[AsalKota]</td>
			<td>$data[StatusJabatan]</td>
			<td style=padding:10px;>
			<a href='tugas3edit.php?update=$data[id_pegawai]' class=le>Ubah</a>
			<a href='?hapus=$data[id_pegawai]' onClick=\"return confirm('Yakin hapus data ini?');\" class='lh'>Hapus</a>
			</td>
		</tr>";
		$nomor++;
	}
	?>
</table>

<?php
if (isset($_GET['hapus'])) {
	mysqli_query($con,"DELETE FROM pegawai where id_pegawai='$_GET[hapus]'") or die(mysqli_error($con));
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>