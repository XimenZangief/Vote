<?php
$id = $_GET['id'];
$subject = find('topics', $id);

$options = all('options', ['topic_id' => $id]);

?>

<h1 class="text-center"><?= $subject['topic']; ?></h1>
<ol class='list-group col-4 m-auto'>
    <form action="./api/save_vote.php" method="post">
        <?php
        foreach ($options as $key => $opt) {
            echo "<label class='list-group-item list-group-item-action'>";
            //若主題為多選，設定為陣列name='opt[]'
            echo "<input type='radio' name='opt' value='{$opt['id']}'> ";
            echo $opt['opt'];
            echo "</label>";
        }
        ?>
</ol>
<div class="text-center">
    <input class='btn btn-info mt-3' type="submit" value="投票">
</div>
</form>