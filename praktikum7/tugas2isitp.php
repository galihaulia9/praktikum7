<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

$sql = "INSERT INTO pegawai (id_pegawai, NamaPegawai, Email, id_kelamin, id_kota, id_status) 
VALUES ('1', 'Galih', 'galih95@gmail.com','2','1','1'),('2', 'Varo', 'alvaro123@gmail.com','1','2','2'), ('3', 'Aulia', 'aulia00@gmail.com','2','1','3')";

if (mysqli_query($conn, $sql)){
	echo "New record created succesfully";
} else {
	echo "Error: ". $sql."<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>