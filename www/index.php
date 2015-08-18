<?php

require __DIR__ .'/models/news.php';

$items = Article_GetAll($res);

require __DIR__.'/view/indexv.php';

?>