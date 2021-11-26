<?php
include_once "./db.php";
echo '<hr>';

$result = select_all('options', ['topic_id'=>'1']);
// $topic_sql = "SELECT * from `topics` where `id`='1'";
// $topic = $pdo->query($topic_sql)->fetch();
dd($result);
?>