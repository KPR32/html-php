<?php

require_once 'conf.php';

$new_rubr = $dbh->prepare("INSERT INTO pod_rubr (rubr) VALUES(:rubr)");

$new_rubr->bindParam(':rubr', $rubr);

$rubr=$_POST['addRubr'];

$new_rubr->execute();

$new_rubr = null;
$dbh = null;

header("Location: addPost1.php");

?>