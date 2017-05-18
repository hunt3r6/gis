<?php 

/**
 * @package  : GIS
 * @author   : Faisal Mahadi <faisalmahadi126@gmail.com>
 * @since    : 2017
 * @license  : http://hunt3r6.net
 */

include ('inc/conf.php');
  
  $q      = "SELECT * FROM tbl_sekolah WHERE id_sekolah ='$_GET[edit]'";
  $result = $conn->query($q);
  $data   = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Data</title>
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

  <div class="row">
  <div class="col-md-12">
   <form method="POST" id="form1" action="edit-proses.php" >
    <input type="hidden" value="<?php echo $data['id_sekolah']; ?>" name='id_sekolah'>
    <div class="form-group">
       <label class="control-label" for="nama">Nama Sekolah</label>
       <input required type="text" value="<?php echo $data['nama_sekolah']; ?>" class="form-control" name='nama_sekolah'>
    </div> 

     <div class="form-group">
       <label class="control-label" for="lat">Latitude</label>
       <input required type="text" value="<?php echo $data['latitude']; ?>" class="form-control" name='lat' id='lat'>
     </div>

     <div class="form-group">
       <label class="control-label" for="lng">Longitude</label>
       <input required type="text" value="<?php echo $data['longtitude']; ?>" class="form-control" name='lng' id='lng'>
     </div>

     <div class="form-group">
        <button type="submit" class="btn btn-success" name='aksi'>Submit</button>
     </div>

    </form>
    </div>
    </div>
    </div>

<?php include('part/footer.php'); ?>