<?php
$servername = "localhost";
$username = "root";
$password = "indriani21";
$database = "2Fitri";

//buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

//check koneksi
if ($conn->connect_error) {
	die("koneksi gagal dengan pesan: ".$conn->connect_error);
}
?>
