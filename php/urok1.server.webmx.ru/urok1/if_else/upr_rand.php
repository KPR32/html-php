<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<h3>Показ изображений</h3>

	<?php
		$pic=rand(1,6);
	echo "Вы выиграли изображение ".$pic."<br><br><img src=\"pic$pic.jpg\">";
	?>
</body>
</html>	