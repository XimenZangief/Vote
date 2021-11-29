<h1>投票清單</h1>

<?php

$subjects= select_all('topics');
echo '<ol>';
foreach ($subjects as $key => $value) {
    echo '<li>';
    echo "<a href='index.php?do=vote.php&id={$value['id']}'>";
    echo $value['topic'];
    echo '</a></li>';
}
echo '</ol>';

?>