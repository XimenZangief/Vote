<h1>投票清單</h1>

<?php

$subjects = select_all('topics');
echo "<ol>";
foreach ($subjects as $key => $value) {//投票結果顯示
    if (calc('options', ['topic_id' => $value['id']]) > 0) {
        echo "<li class='list-group-item'>";
        if(isset($_SESSION['user'])){
        echo "<a class='d-inline-block col-md-8 href='index.php?do=vote.php&id={$value['id']}'>";
        echo $value['topic'];
        echo "</a></li>";
        }
    }else{
        echo "<span>" .$value['topic']. "</span>";
    }
}

$count=q("SELECT sum(`count`) from `options` where `topic_id`='{$value['id']}'");
echo "<span class='d-inline-block col-md-8 text-center'>";
echo $count[0]['總計'] . "</span>";

echo "<a href='?do=vote_reuslt&id={$value['id']}' class='d-inline-block col-md-8 text-center'>";
echo "<button class='btn btn-primary'>觀看結果</button>";
echo "</a></li>";

echo "</ol>";

?>