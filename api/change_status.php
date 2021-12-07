<?php 
include_once "db.php";

$id=$_GET['id'];
$img=select_one('ads',$id);
$img['sh']=($img['sh']+1)%2;
update('ads',['sh'=>$img['sh']],['id'=>$img['id']]);

to("../backend/?do=ad");
?>