<?php
include_once "db.php";

$opt_id=$_POST['opt'];
$opt=select_one('options',$opt_id);//$opt['count']++;

$opt['count']=$opt['count']+1;

update('options',['count'=>$opt['count']],['id'=>$opt_id]);

to("../index.php?go=vote_result&id={$opt['id']}");

?>