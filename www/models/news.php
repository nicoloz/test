<?php
require __DIR__.'/../functions.php';
connect('localhost','vaso','1234','news');

$sql = "SELECT * FROM articls ORDER BY data DESC";
$res = mysql_query($sql);

function Article_GetAll($res){
    $massiv = [];
    while($row = mysql_fetch_assoc($res)){
        $massiv[] = $row;
    }
    return $massiv;
}

?>