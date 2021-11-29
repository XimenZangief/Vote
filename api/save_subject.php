<?php

include_once "db.php";
print_r($_POST['subject']);
echo '<hr>';

//資料表的欄位名稱=>資料內容
$topic_array = ['topic' => $_POST['subject']];
ins('topics', $topic_array);
$topic_sql = "SELECT * from `topics` where `topic`='{$_POST['subject']}'";
$topic = $pdo->query($topic_sql)->fetch();

foreach ($_POST['options'] as $opt) {
  $opt_array = ['opt'=>$opt, 'topic_id'=>$topic['id']];
  ins('options', $opt_array);
}
$opt_sql = "SELECT `opt` from `options` where `topic_id`='{$topic['id']}'";
$opt = $pdo->query($opt_sql)->fetchAll();

dd($topic);
echo '<hr>';
dd($opt);
