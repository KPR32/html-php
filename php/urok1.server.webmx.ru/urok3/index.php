<?php
	class  Worker{
		private $name, $surname, $patronymic, $status, $dateStart, $salary;
		private $nameF;
		private $f;
		private $lines = [];
		private $fname;

		function __construct($name, $surname, $patronymic, $status, $dateStart, $salary,$fname, $nameF)
		{
			$this->name = $name;
			$this->surname = $surname;
			$this->patronymic = $patronymic;
			$this->status = $status;
			$this->dateStart = $dateStart;
			$this->salary = $salary;	
			$this->nameF=$nameF;		
			$this->f=fopen($fname,"a+");
			$this->log("### __construct() called!");
		}

			public function __destruct()
		{		
			$this->log("### __destruct() called!");	
			fputs($this->f,join("",$this->lines));
			fclose($this->f);
		}

		public function log($str)
		{
			$prefix="[".date("Y-m-d_h:i:s")."($this->nameF)]";
			$str=preg_replace('/^/m', $prefix,rtrim($str));
			$this->lines[] = $str. "\n";
		}	

		function show()
		{
			echo "Фио - ".$this->name." ".$this->surname." ".$this->patronymic.
				"<br>Должность - ".$this->status.				
				"<br>Год поступления - ".$this->dateStart.				
				"<br>Зарплата - ".$this->salary;
		}

		function setName($name)
		{
			$this->name=$name;
		}
		function getName()
		{
			return $this->name;
		}

		function setSurname($surname)
		{
			$this->surname=$surname;
		}
		function getSurname()
		{
			return $this->surname;
		}

		function setPatronymic($patronymic)
		{
			$this->patronymic=$patronymic;
		}
		function getPatronymic()
		{
			return $this->patronymic;
		}

		function setStatus($staus)
		{
			$this->staus=$staus;
		}
		function getStatus()
		{
			return $this->status;
		}

		function setDateStart($dateStart)
		{
			$this->dateStart=$dateStart;
		}
		function getDateStart()
		{
			return $this->dateStart;
		}

		function setSalary($salary)
		{
			$this->salary=$salary;
		}
		function getSalary()
		{
			return $this->salary;
		}		
	}

	$first = new Worker("Дмитрий", "Кузнецов", "Сергеевич", "Инженер", "21.02.2015", "30000","a+","a+");
	$first2 = new Worker("Андрей", "Петров", "Александрович","Менеджер", "22.08.2007", "40000","a+","a+");
	$first3 = new Worker("Алексей", "Лавров", "Евгеньевич", "Охраник","22.03.2013","28500","a+","a+");
	$first4 = new Worker("Евгений", "Гордеев", "Алексеевич","Консультант","01.02.2010","26000","a+","a+");

	

	echo "1 Вывод - стаж работ больше";

	echo "<br><br>";

	$mass =[$first, $first2, $first3, $first4];

	foreach ($mass as $key) {
		if (strtotime($key->getDateStart()) > strtotime("01.01.2014")) {
			$key->show();
			echo "<br><br>";
		}
	}

	echo "<br><br><br><br>";

	echo "2 Вывод - зарплата больше";

	echo "<br><br>";

	foreach ($mass as $key) {
		if ($key->getSalary() > "29999") 
		{
			$key->show();
			echo "<br><br>";
		}
	}

	echo "<br><br><br><br>";

	echo "3 Вывод - выбранная должность";	

	echo "<br><br>";

	foreach ($mass as $key) {
		if ($key->getStatus() == "Инженер") 
		{
			$key->show();
			echo "<br><br>";
		}
	}

	echo "<br><br><br><br>";
?>