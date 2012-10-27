<!DOCTYPE html>
<html>
<head>
<title>Busabfahrtszeiten</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<meta name='viewport' content='width=device-width' />
<script type="text/javascript">
	function createurl() {
		if (document.getElementById("stopid").selectedIndex) {
			window.location = "list.php?id="+selectWert(document.getElementById("stopid"));
		}
	}

	function selectWert(sObj) {
		with (sObj) return options[selectedIndex].value;
	}	
</script>
</head>
<body>

<div class="page">
	<div class="head">
		<h1>Busabfahrtszeiten</h1>
	</div>
	

	<div class="content">

	<div class="button" style="float: left"><img src="img/icon_pin.png"><br />Umgebung</div>
	<div class="button" style="width: 35%; float: right"><img src="img/icon_fav.png"><br />Favoriten</div>

	<?php
	echo file_get_contents("haltestellendropdown.htm");
	?>
	<!-- <button onclick="createurl();return false;">Link erzeugen</button> -->


	</div>
	<div class="foot">
		HSG Datalove<br><a href="http://www.ulmapi.de/">www.ulmapi.de</a> :: <a href="mailto:datalove@lists.uni-ulm.de">Kontakt</a> :: <a href="https://github.com/UlmApi/departure-times-mobile">Sourcecode</a> 
		
	</div>
</div>



</body>
</html>
