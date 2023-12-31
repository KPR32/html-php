<?php
	if(!isset($_GET['id'])) 
	{
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
		exit;
	}
	require_once 'conf.php';
	$post = $dbh->prepare("SELECT * FROM blog join heading on blog.headingid = heading.headid WHERE headingid =:id");
	$post->bindParam(':id', $id);
	$id = $_GET[id];
	$post->execute();
?>
<html>
	<head>
		<title>Личный блог</title>
		<meta charset="utf-8">
		<style>
			body {
				font-family: Arial;
			}
			.container{
				width: 1000px;
				margin: 0 auto;
			}
			.post {
				float: left;
				width:420px;
				margin:20px;
			}
		</style>
	</head>
	<body>
		<div class ="container">
			<h1>Личный блог Иванова И.И.</h1>
			<?php

			
    		if($post->rowCount() == 0) {
    			echo "<h2>Пусто!</h2>";
    		}
			
			foreach ($post as $row) 
			{	
			
				echo "<div class='post'><h2>".$row['title']."</h2>";
				echo "<p><i>".$row['author']."</i></p>";
				echo "<p>Дата публикации: ".$row['post_date']."</p>";
				if(strlen($row['text'])>100)
				{
					echo "<hr><p>".substr($row['text'], 0,100)."...</p>";
				}
				else
				{
					echo "<hr><p>".$row['text']."</p>";
				}
				echo "<p>".$row['rub_title']."</p>";
				echo "<a href='post.php?id=".$row['id']."'>Читать подробнее</a></div>";

				
			}
			

			
			
			?>
		</div>
	</body>
</html>
