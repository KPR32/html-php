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

	if ($pic==1) {$dollar=1;}
	else if ($pic==2) {$dollar=2;}
	else if ($pic==3) {$dollar=3;}
	else if ($pic==4) {$dollar=4;}
	else if ($pic==5) {$dollar=5;}

	else {print "<br><br>Вы ничего не выиграли...";}
	if($dollar !=0) {print "<h2><font color=\"red\">Вы выиграли $".$dollar."</font></h2>";}
?>
</body>
</html>