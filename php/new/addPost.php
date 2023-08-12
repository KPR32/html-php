<?php
require_once 'conf.php';
$new_post = $dbh->prepare("INSERT INTO blog (title,author,text,headingid,post_date) VALUES(:title,:author,:text,:headingid,:post_date)");
$new_post->bindParam(':title',$title);
$new_post->bindParam(':author',$author);
$new_post->bindParam(':text',$text);
$new_post->bindParam(':headingid',$headingid);
$new_post->bindParam(':post_date',$post_date);

$title = $_POST['title'];
$author = $_POST['author'];
$text = $_POST['text'];
$headingid = $_POST['headings'];
$post_date = date("y-m-d");

if($_POST['title']!=""&&$_POST['author']!=""&&$_POST['text']!="")
{
	$rub_title = $_POST['heading_title'];
	$new_post->execute();
}
else
{
	die();
}



$new_post = null;
$dbh = null;

header("Location: index.php");
?>