<?php include_once "db.php";

$user=find('users',$_GET['id']);
del('users',$_GET['id']);

to('../backend/?do=manage_user');
?>