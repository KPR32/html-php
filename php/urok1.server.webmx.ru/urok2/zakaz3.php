<?php
	$koli=$_POST['koli'];
	$nameT=$_POST['kateg'];	
	$adres=$_POST['adres'];	
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

	$sumtovar=$koli;
	$address=$address;	
	$price=1;
	

	if($sumtovar==0)
		{echo '<p><b>Вы ничего не заказали на предыдущей странице</b></p>';}
	elseif($koli<0)
		{echo '<p><b>Неверно указано количество товара</b></p>';}

	else{

        if($nameT=="Ручка")
        {
        	$price=10;
		if($koli<5)
			$discount=5;
		elseif($koli>=5&&$koli<=10)
			$discount=10;
		elseif($koli>10)
			$discount=20;
        }        	
	  	
	  	elseif($nameT=="Книга")
	  	{$price=100;        
	  	
		if($koli<5)
			$discount=5;
		elseif($koli>=5 && $koli<=10)
			$discount=10;
		elseif($koli>10)
			$discount=20;}

		elseif($nameT=="Сувенир")
	  	{$price=1000; 

	  	if($koli>0 && $koli<=9)
	  		$discount=0;  
		elseif($koli>=10 && $koli<=19)
			$discount=10;
		elseif($koli>19 && $koli<30)
			$discount=20;
		elseif($koli>30)
			$discount=40;}

			elseif($nameT=="Компьютер")
	  	{$price=10000; 

	  	if($koli>0 && $koli<=9)
	  		$discount=0;  
		elseif($koli>=10 && $koli<=19)
			$discount=10;
		elseif($koli>19 && $koli<30)
			$discount=20;
		elseif($koli>30)
			$discount=40;}		
        	
	  	
		
		$sumprice=$koli*$price;;
		$sumdiscont=$sumprice-$koli*$price*$discount/100;
		$nalogsale=0.18;
		$sumnalog=$sumdiscont*(1+$nalogsale);
		$sumnalog=$sumnalog+500;
		$disc=$sumprice / 100 * $discount;
		
		


		
		echo "<p><font color=\"maroon\"<b>Заказ обработан в ".date('H:i, jS F')."<br><br>Список вашего заказа</b></font><br><br>";		
		echo 'Товар - '. $nameT. '<br><br>';
		echo 'Стоимость 1 шт. - '.$price. ' руб. <br>';
		echo 'Количество заказанных товаров - '.$koli. ' <br>';
		echo 'Общая стоимость заказа - '.$sumprice.' руб. <br>';
		echo 'Стоимость доставки - 500 руб. <br>';
		echo 'Налог с продаж - 18%. <br>';		
		echo 'Ваша скидка - ' .$discount . ' % (' .$disc. ' руб.) <br>';
		echo 'Стоимость заказа с учетом скидки, доставки и налога с продаж - '.$sumnalog.'<br>';		
		echo 'Ваш адрес: '.$adres.'<br>';		
		}
		
	?>
</body>
</html>