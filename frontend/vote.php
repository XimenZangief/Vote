<?php

$id=$_GET['id'];
$subject=select_one('topics',$id);

?>

<h1><?= $subject['topics']; ?> </h1>