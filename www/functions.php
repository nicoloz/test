<?php

function connect($host,$name,$pass_bd,$bd){
    mysql_connect($host,$name,$pass_bd);
    mysql_select_db($bd);
}

function OutPut($massiv,$fieldid,$fielddata,$fieldname){
    foreach($massiv as $item){
        foreach($item as $holdkey => $holditem){
            if($holdkey == $fieldid){
                $id = $holditem;
            }
            if($holdkey == $fielddata){
                echo $holditem.'    ';
            }
            if($holdkey == $fieldname){
                echo '<a href="models/article.php?id='.$id.'">'.$holditem.'</a>'.'.......<br><br>';
            }
        }
    }
}

?>