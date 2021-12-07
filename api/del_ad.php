<?php
include_once "db.php";

$img=select_one('ads',$_GET['id']); //找到檔案
unlink("../img/".$img['name']);  //刪除檔案
del('ads',$_GET['id']); //刪除資料庫的資料
to("../backend/?do=ad"); //回ad頁

?>