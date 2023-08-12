<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
</head>
<body>
	<h3>Упражнение 1</h3>

<?php
$VarName="Значение переменной";

echo "1. Текст<br>$VarName<br><br>";
echo '2. Текст<br> $VarName<br><br>';
echo "3. Текст ".$VarName." (Конкатенация)<br><br>";
print ("4. Текст <br><font color=\"red\">$VarName</font><br><br>");
print ('5. Текст <br>$Varname');

print ("<br><br>");

$x=3;
$y=5;

print ("$x + $y = ".($x+$y)."<br><br>");

print ("$x - $y = ".($x - $y)."<br><br>");

print ("$x * $y : $y = ".($x*$y/$y)."<br><br>");

print ("($x + $y) : 2 = ".(($x+$y)/2)."<br><br>");

print ("$x + $y : 2 = ".($x+$y/2)."<br><br>");

?>


</body>
</html>