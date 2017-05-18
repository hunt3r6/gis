<?php 

/**
 * @package  : GIS
 * @author   : Faisal Mahadi <faisalmahadi126@gmail.com>
 * @since    : 2017
 * @license  : http://hunt3r6.net
 */
 include('inc/conf.php');

 $idlokasi = $_GET[idlokasi];
 $q ="DELETE FROM tbl_sekolah WHERE id_sekolah ='$idlokasi'";
 $conn->query($q);

 header("location:daftar-sekolah.php");

 ?>