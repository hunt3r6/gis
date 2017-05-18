<?php

include ('inc/conf.php');


$nama = $_POST['nama_sekolah'];
$nama_r = str_replace("'", "", $nama);
$lat =$_POST['lat'];
$lng = $_POST['lng'];

$sql = "INSERT INTO tbl_sekolah(nama_sekolah,latitude,longtitude) VALUES('$nama_r','$lat','$lng')";

if ($conn->query($sql) === TRUE) {
	header('location:daftar-sekolah.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
