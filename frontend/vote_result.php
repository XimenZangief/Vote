<h1>投票結果</h1>

<?php

$sql ="SELECT * from `topics`, `options` 
                where `topics`.`id`=`options`.`topics_id` and
                      `topics_id`='{$_GET['id']}'";

$rows=q($sql);

?>
<h1><?= $rows[0]['topic']; ?></h1>
<?php
    foreach ($rows as $row) {
        echo '<li>';
        echo "<span>{$row['opt']}</span>";
        echo "<span>{$row['count']}</span>";
        echo '</li>';
    }
?>