<?php 

//$koneksi = mysqli_connect("localhost","u535898939_mybiz","U535898939_mybiz","u535898939_mybiz");

$koneksi = mysqli_connect("localhost","root","","logibit");


// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

error_reporting(E_ALL);
ini_set("display_errors", 1);

?>