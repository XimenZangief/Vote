<?php

include_once "./db.php";
print_r($_POST['subject']);

//資料表的欄位名稱=>資料內容
$topic_array = ['topic' => $_POST['subject']];
ins('topics', $topic_array);
$topic_sql = "SELECT * from `topics` where `topic`='{$_POST['subject']}'";
$topic = $pdo->query($topic_sql)->fetch();

foreach ($_POST['options'] as $key) {
  $opt_array = ['opt'=>$key, 'topic_id'=>$topic['id']];
  ins('options', $opt_array);
}
$opt_sql = "SELECT * from `options` where `id`='{$POST['subject']}'";
$opt = $pdo->query($opt_sql)->fetch();

echo $topic;
echo '<hr>';
echo $opt;
