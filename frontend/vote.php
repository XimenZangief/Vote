<?php

$id = $_GET['id'];
$subject = select_one('topics', $id);
$options = select_all('options', ['topic_id' => $id]);

?>

<h1><?= $subject['topics']; ?> </h1>

<form action="../api/save_vote.php" method="POST">
    <ol>
        <?php
        foreach ($options as $key => $opt) {
            echo '<li>';
            echo "<input type='checkbox' name='opt' value='{$opt['id']}'>"; //name相同為單選，不同為多選
            echo $opt['opt'];
            echo '</li>';
        }
        ?>
    </ol>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>