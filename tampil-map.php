<?php 

/**
 * @package  : GIS
 * @author   : Faisal Mahadi <faisalmahadi126@gmail.com>
 * @since    : 2017
 * @license  : http://hunt3r6.net
 */

include ('inc/conf.php');
  
  $q      = "SELECT * FROM tbl_sekolah WHERE id_sekolah ='$_GET[idlokasi]'";
  $result = $conn->query($q);
  $data   = $result->fetch_array();
     
include('part/header.php');
?>
 <script type="text/javascript">
        (function(){
        window.onload = function(){
        var map;
        var Lintang = <?php echo "$data[latitude]"; ?>;
        var Bujur   = <?php echo "$data[longtitude]"; ?>;
        var options = {
                      zoom: 18,
                      center: new google.maps.LatLng(Lintang,Bujur),
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                      };

        var map       = new google.maps.Map(document.getElementById('Peta_1'), options);
        var marker    = new google.maps.Marker({
                        position: new google.maps.LatLng(Lintang, Bujur),
                        map: map,
                        title: "<?php echo $data['nama_sekolah']; ?>"
                      });
        };
        })();
  </script>
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
    <h3>Lokasi : <?php echo $data['nama_sekolah']; ?></h3>
    <div id="Peta_1" style="width: 100%; height: 500px;">

    </div>
  </div>

 <?php include('part/footer.php'); ?>

