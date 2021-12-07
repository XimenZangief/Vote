<?php
include_once "db.php";

//若重登成功，清除err訊息
if(isset($_SESSION['err'])){ 
    unset($_SESSION['err']);
}

if(rows('users',$_POST)){
    $_SESSION['user']=$_POST['acc'];
    to("../index.php");
}else{
    $_SESSION['err']="帳密錯誤";
    to("../index.php?do=login");
}
?>