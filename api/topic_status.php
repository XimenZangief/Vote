<?php include_once "db.php";

$id=$_GET['id'];
$topic=find('topics',$id);

$topic['sh']=($topic['sh']+1)%2;

//將更新完的資料帶入update函式，完成更新
update('topics',['sh'=>$topic['sh']],['id'=>$topic['id']]);

//資料表更新完成，將頁面導向原本的廣告管理頁面
to("../backend/?do=manage_vote");

?>