<h1>投票清單</h1>

<?php

$subjects = select_all('topics');
echo '<ol>';
foreach ($subjects as $key => $value) {
    if (calc('options', ['topic_id' => $value['id']]) > 0) {
        echo '<li class="list-group-item">';
        echo "<a class='d-inline-block col-md-8 href='index.php?do=vote.php&id={$value['id']}'>";
        echo $value['topic'];
        echo '</a></li>';
    }
}
echo '</ol>';

$count=q("SELECT sum(`count`) from `options` where ")
echo 
?>