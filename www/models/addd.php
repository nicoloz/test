<?php
if(!empty($_POST['data'])){
    $data = $_POST['data'];
}else{header ('Location: ../view/add.php');}

if(!empty($_POST['name'])){
    $name = $_POST['name'];
}else{header ('Location: ../view/add.php');}

if(!empty($_POST['text'])){
    $text = $_POST['text'];
}else{header ('Location: ../view/add.php');}
//-------------------------------------------------------------------------
require __DIR__.'/../functions.php';
connect('localhost','vaso','1234','news');
//-------------------------------------------------------------------------
$query = "INSERT INTO articls (data,name,text) VALUES ('".$data."','".$name."','".$text."')";
mysql_query($query);
//-------------------------------------------------------------------------
header ('Location: ../index.php');

?>