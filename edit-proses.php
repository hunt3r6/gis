<?php

/**
 * @package  : GIS
 * @author   : Faisal Mahadi <faisalmahadi126@gmail.com>
 * @since    : 2017
 * @license  : http://hunt3r6.net
 */

include ('inc/conf.php');

$id 	= $_POST['id_sekolah'];
$nama = $_POST['nama_sekolah'];
$nama_r = str_replace("'", "", $nama);
$lat =$_POST['lat'];
$lng = $_POST['lng'];

$sql = "UPDATE tbl_sekolah SET nama_sekolah='$nama_r', latitude='$lat', longtitude='$lng' WHERE id_sekolah='$id'";

if ($conn->query($sql) === TRUE) {
	header('location:daftar-sekolah.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
