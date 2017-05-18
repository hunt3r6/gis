<?php
/**
 * @package  : GIS
 * @author   : Faisal Mahadi <faisalmahadi126@gmail.com>
 * @since    : 2017
 * @license  : http://hunt3r6.net
 */

include('inc/conf.php');
include('part/header.php');
?>

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
  <div class="col-md-8">
  <div id="map" style="width: 100%; height: 500px;"></div>
  </div>

  <div class="col-md-4">
   <form method="POST" id="form1" action="action.php" >

    <div class="form-group">
       <label class="control-label" for="nama">Nama Sekolah</label>
       <input required type="text"  class="form-control" name='nama_sekolah'>
    </div> 

     <div class="form-group">
       <label class="control-label" for="lat">Latitude</label>
       <input required type="text" class="form-control" name='lat' id='lat'>
     </div>

     <div class="form-group">
       <label class="control-label" for="lng">Longitude</label>
       <input required type="text"  class="form-control" name='lng' id='lng'>
     </div>

     <div class="form-group">
        <button type="submit" class="btn btn-success" name='aksi'>Submit</button>
     </div>

    </form>
    </div>
    </div>
    </div>



<script type="text/javascript">
    document.getElementById('reset').onclick = function() {
           var field1 = document.getElementById('lng');
           var field2 = document.getElementById('lat');
           field1.value = field1.defaultValue;
           field2.value = field2.defaultValue;
     };
</script>

<script type="text/javascript">

     function updateMarkerPosition(latLng) 
     {
        document.getElementById('lat').value = [latLng.lat()];
        document.getElementById('lng').value = [latLng.lng()];
     }

    var myOptions = {
                  zoom: 15,
                  scaleControl: true,
                  center:  new google.maps.LatLng(-7.527354,112.239953),
                  mapTypeId: google.maps.MapTypeId.ROADMAP
      };

 
    var map = new google.maps.Map(document.getElementById("map"), myOptions);

    var marker1 = new google.maps.Marker({
          position: new google.maps.LatLng(-7.527354, 112.239953),
          title: 'Jombang',
          map: map,
          draggable: true
      });
 
 //updateMarkerPosition(latLng);

    google.maps.event.addListener(marker1, 'drag', function() {
    updateMarkerPosition(marker1.getPosition());
  });
</script>

<?php include('part/footer.php'); ?>