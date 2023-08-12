<!DOCTYPE html>
	<head>
		<title>Добавить запись в блог</title>
		<meta charset="utf-8">
		<style>
			form {
				width:500;
			}
			form > div > input,textarea{
				width:100%;
			}
			textarea{
				height: 300px;
			}
		</style>
	</head>
	<form method="POST" action="addPost.php">
		<div>
			<label for="title">Заголовок записи</label><br>
			<input type="text" name="title" placeholder="заголовок">
		</div>
		<div>
			<label for="author">Автор записи</label><br>
			<input type="text" name="author" placeholder="автор">
		</div>
		<div>
			<label for="text">Текст записи</label><br>
			<textarea name="text" placeholder="текст"></textarea>
		</div>
		<div>
			<label for="text">Рубрика</label><br>
			<select name="headings">
				<?php
					require_once 'conf.php';
					$rows = $dbh->query("select * from heading");
					foreach($rows as $row)
					{
						echo "<option value='".$row['headid']."'>".$row['rub_title']."</option>";
					}
				?>
			</select>
		</div>
		<div>
			<input type="submit" name="submit" value="Добавить запись">
		</div>
	</form>
	<form method="POST" action="addHeading.php">
		<div>
			<label for="heading_title">Название рубрики</label><br>
			<input type="text" name="heading_title" placeholder="Рубрика">
		</div>
		<div>
			<input type="submit" name="submit" value="Добавить рубрику">
		</div>
	</form>