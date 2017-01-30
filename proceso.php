<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<?php
			if((isset($_GET["anos"])==false) OR (isset($_GET["nombre"])==false)){
				echo "<p>No he recibido datos</p>";
			}else {
				$anos = $_GET["anos"];
				$nombre = $_GET["nombre"];
				echo "<h1> Tu nombre es $nombre</h1>";
				echo "<h1>Has trabajado $anos años</h1>";
				echo "<h1>Vas a recibir</h1>";
				if ($anos <= 10) {
					echo $anos * 1500;
				} else {
					echo $anos * 1200;
					echo "€";
				}
			}

		?>
		€
</body>
</html>