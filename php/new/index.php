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
			.menucontainer{
				float:left;
				width: 500px
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
		<div class ="menucontainer">
			<h2>Рубрики</h2>
			<hr>
			<?php
			require_once 'conf.php';
			$rows = $dbh->query("select * from heading");
			foreach($rows as $row)
			
				echo "<a href='HeadingPosts.php?id=".$row['headid']."'>".$row['rub_title']."</a><br><br>";

			?>
		</div>
		<div class ="container">
			
			<h1>Личный блог Иванова И.И.</h1>
			<?php
			require_once 'conf.php';
			$rows = $dbh->query("select * from blog join heading on blog.headingid = heading.headid");
			foreach ($rows as $row) 
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