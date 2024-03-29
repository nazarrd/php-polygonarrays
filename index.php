<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multi Polygon Arrays di Google Maps</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=drawing&geometry"></script> -->
    
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCgdfSdzt4cecSHPziSxNGDsXSUUVr0oLA&libraries=geometry&sensor=false&language=id"></script>
    <script src="app.js"></script>
</head>
<body onload="peta_awal()">
    <div class="container">
        <div class="row">
           <div class="col-lg-12">
                <?php require('connect.php'); ?>
                <h2>Multi Polygon Arrays di Google Maps</h2>
            	<table class="table" border="0">
            		<tr>
                		<td>
                    		<select name="kecamatan" id="kecamatan" class="form-control">
    	                		<option value="">Silahkan Pilih Kecamatan</option>
    		                	<?php 
        		                	$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `kecamatan`");
        		                	while($val = mysqli_fetch_array($sql)) {
        		                		echo '<option value="'.$val['id'].'">'.$val['nama_kecamatan'].'</option>';
        		                	}
    		                	?>
                    		</select>
                		</td>
                		<td>
                    		<select name="status" id="status" class="form-control">
    	                		<option value="">Silahkan Pilih Status</option>
    		                	<?php 
        		                	$sql = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `status`");
        		                	while($val = mysqli_fetch_array($sql)) {
        		                		echo '<option value="'.$val['id'].'">'.$val['nama_status'].'</option>';
        		                	}
    		                	?>
                    		</select>
                		</td>
                		<td>
                			<button type="button" id="search" class="btn btn-primary">Cari Lokasi Lahan</button>
                		</td>
                    </tr>
            	</table>
                <div id="map-canvas" style="width:100%; height:700px;"></div>
            </div>
        </div>
        <hr>
    </div>
   </body>
</html>
