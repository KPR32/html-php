<html>
    <head>
        <title>Запись</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: Arial;
            }
            .container {
                width: 1000px;
                margin: 0 auto;
                padding: 20px;
            }
            .post-footer > p {
                display: inline-block;
                margin: 20px;
                font-style: italic;
            }
        </style>
    </head>
    <body>

    	<?php
if(!isset($_GET['blog_id'])) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    exit;
}
require_once 'conf.php';
$post = $dbh->prepare("SELECT * FROM blog WHERE blog_id=:blog_id");
$post->bindParam(':blog_id', $blog_id);
$blog_id = $_GET[blog_id];
$post->execute();
$result = $post->fetch(PDO::FETCH_ASSOC);
if (!$result) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    exit;
}
?>
        <div class="container">
            <h1>Личный блог Иванова И.И.</h1>
                           
            <h2><?= $result['title'] ?></h2>
            <p><?= $result['name'] ?></p>
            <p><?= $result['text'] ?></p>
            <p><?= $result['rubr'] ?></p>
            <hr>
            <div class="post-footer">
                <p>Дата поста</p>
                <?= $result['date'] ?>
                <p>Автор - <?= $result['author'] ?></p>
                <?
                echo"<p><i><a href='index.php?'>Обратно к блогу</p></i></a></div>
                
            </div>

        </div>

    </body>
</html>