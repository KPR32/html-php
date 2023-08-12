<?php

require_once 'conf.php';

$new_post = $dbh->prepare("INSERT INTO blog (title, author, text, rubr_id,date) VALUES(:title, :author, :text, :rubr_id, :date)");

$date= date("y-m-d");


$new_post->bindParam(':title', $title);
$new_post->bindParam(':author' , $author);
$new_post->bindParam(':text', $text);
$new_post->bindParam(':date', $date);
$new_post->bindParam(':rubr_id', $rubr_id);



$title = $_POST['title'];
$author = $_POST['author'];
$text = $_POST['text'];
$rubr_id = $_POST['rubr_id'];
$date = date("y-m-d");


$new_post->execute();


$new_post = null;
$dbh = null;


header("Location: index.php");

?>