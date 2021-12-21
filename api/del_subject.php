<?php include_once "db.php";

$topics=find('topics',$_GET['id']);
del('topics',$_GET['id']);

to('../backend/?do=manage_vote');
?>