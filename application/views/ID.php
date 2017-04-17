<!DOCTYPE html>
<html>
<head>
	<title>ID Card <?php //echo $name ?> </title>
</head>
<style type="text/css">
	body{
		height: 550px;
		width: 900px;
	}
	.image { 
	   	position: relative; 
	   	width: 100%; /* for IE 6 */
	}

	h2 { 
	   	position: absolute; 
	   	top: 135px; 
	   	left: 0; 
	   	width: 100%; 
	   	text-align: center;
	   	align-items: center;
	}
	.fishes { 
		position:absolute; 
		top: 10px; 
		left: 10px; 
		z-index: 1; 
	} 
	.qr { 
		position:absolute; 
		top: 950px; 
		left: 415px; 
		z-index: 2; 
	} 
</style>
<body onload="printID()" >
	<div class="image">
		<img src="<?php echo base_url('assets/img/ID/BackSide.jpg')?>" alt="" />
		<h2>Sandy Kurniawan <?php //echo $name ?></h2>
	</div>
	<br/>
	<div class="image">
		<img src="<?php echo base_url('assets/img/ID/FrontSide.jpg')?>" alt="" />
	</div>

	 <img src="https://api.qrserver.com/v1/create-qr-code/?data=https://www.facebook.com/sandyjrs.kurniawan&size=100x100" class ="qr" alt="" title="QR" />
	<!-- Script print -->
    <script>
	    function printID() {
	    	window.print();
	    }
    </script>
</body>
</html>