<?php
	$pokr=$_POST['pokr'];
	$oil=$_POST['oil'];
	$svecha=$_POST['svecha'];
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Результаты заказа</title>
</head>
<body>
	<h2>Результаты заказа</h2>

	<?php
		echo "<p><font color=\"maroon\"<b>Заказ обработан</b></font><br><br>";
		echo $pokr. ' автопокрышек<br>';
		echo $oil. ' бутылок с маслом<br>';
		echo $svecha. ' свечей зажигания<br><br>';
	?>
</body>
</html>