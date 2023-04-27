<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

$sql = "CREATE TABLE pegawai (id_pegawai INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
NamaPegawai VARCHAR(200) NOT NULL, Email VARCHAR(50)NOT NULL, id_kelamin VARCHAR(2), id_kota VARCHAR(2), id_status VARCHAR(2))";

if (mysqli_query($conn, $sql)){
	echo "New record created succesfully";
} else {
	echo "Error: ". $sql."<br>". mysqli_error($conn);
}

mysqli_close($conn);
?>