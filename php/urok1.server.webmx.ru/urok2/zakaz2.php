<?php
	$pokr=$_POST['pokr'];
	$oil=$_POST['oil'];
	$svecha=$_POST['svecha'];
	$address=$_POST['address'];
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
	$sumtovar=$pokr+$oil+$svecha;
	define('POKRPRICE',10);
	define('OILPRICE',10);
	define('SVECHAPRICE',10);
	$sumprice=$pokr*POKRPRICE+$oil*OILPRICE+$svecha*SVECHAPRICE;

	if($sumtovar==0)
		{echo '<p><b>Вы ничего не заказали на предыдущей странице</b></p>';}
	elseif($pokr<0|$oil<0|$svecha<0)
		{echo '<p><b>Неверно указано количество товара</b></p>';}

	else{
		if($pokr<10)
			$discount=0;
		elseif($pokr>=10&&$pokr<=49)
			$discount=5;
		elseif($pokr>=50&&$pokr<=99)
			$discount=10;
		elseif($pokr>=100)
			$discount=15;

		$sumdiscont=$sumprice-$pokr*POKRPRICE*$discount/100;
		$nalogsale=0.10;
		$sumnalog=$sumdiscont*(1+$nalogsale);
		


		echo "<p><font color=\"maroon\"<b>Заказ обработан в ".date('H:i, jS F')."<br><br>Список вашего заказа</b></font><br><br>";
		echo $pokr. ' автопокрышек<br>';
		echo $oil. ' бутылок с маслом<br>';
		echo $svecha. ' свечей зажигания<br><br>';
		echo 'Заказано товаров: '.$sumtovar. '<br>';
		echo 'Ваша скидка составила: '.$discount.'%<br>';
		echo 'Итого: $'.number_format($sumdiscont,2).'<br><br>';
		echo 'Всего, включая налог с продаж: $'.number_format($sumnalog,2).'<br>';
		echo 'Ваш адрес: '.$address.'<br>';
		}
		$date=date('H:i, j F');
		$output=$date." ".$pokr." автопокрышек, ".$oil." бутылок с маслом, ". $svecha." свечей зажигания. Всего на сумму $ ".number_format($sumnalog,2)." ".$address."\n";
		$fp=fopen("orders.txt", 'a');
		fwrite($fp,$output);
		fclose($fp);
	?>
</body>
</html>