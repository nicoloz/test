<?php

$id = $_GET['id'];
//----------------------------------------------
require __DIR__.'/../functions.php';
connect('localhost','vaso','1234','news');
//----------------------------------------------
$sql = "SELECT text FROM articls WHERE id = $id";
$res = mysql_query($sql);
//----------------------------------------------
$row = mysql_fetch_assoc($res);
echo $row['text'];
?>