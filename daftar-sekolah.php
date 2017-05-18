<?php 
/**
 * @package  : GIS
 * @author   : Faisal Mahadi <faisalmahadi126@gmail.com>
 * @since    : 2017
 * @license  : http://hunt3r6.net
 */

include ('inc/conf.php');

$sql = "SELECT * FROM tbl_sekolah";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
 <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Peta Sekolah</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Input Lokasi</a></li>
      <li><a href="daftar-sekolah.php">Lihat Daftar Lokasi</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="about.php">About</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading" style="text-align: center; font-size:21px;">DAFTAR LOKASI SEKOLAH</div>
<div class="table-responsive">
<table class="table table-striped">
<tr>
	<th>Nama Sekolah</th>
	<th>Action</th>
</tr>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($data= $result->fetch_array()) {
        echo "<tr>
        		<td>$data[nama_sekolah]</td>
        		<td><a class='btn btn-info fa fa-map-marker' href='tampil-map.php?idlokasi=$data[id_sekolah]'> Lihat Lokasi</a> | 
                <a class='btn btn-warning fa fa-pencil-square-o' href='edit.php?edit=$data[id_sekolah]'> Edit Lokasi</a> | 
                <a class='btn btn-danger fa fa-times' href='delete.php?idlokasi=$data[id_sekolah]'> Delete Lokasi</a> </td>
        	</tr>";
    }
} 
?>
</table>
</div>
</div>
</div>

<?php include('part/footer.php'); ?>