<?php include_once "db.php";

//使用find自訂函式取得指定id的圖片紀錄
$image=find('users',$_GET['id']);

//使用del()自訂函式來刪除指定id的圖片紀錄
del('users',$_GET['id']);

//刪除作業完畢，導向回廣告管理頁面
to('../backend/?do=manage_vote');
?>