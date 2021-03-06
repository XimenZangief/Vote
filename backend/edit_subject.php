<?php

$subject = find('topics', $_GET['id']);
$options = all('options', ['topic_id' => $_GET['id']]);

?>
<form action="../api/edit_subject.php" method='post' class='col-6 m-auto text-center'>
    <label>問卷主題: <input type="text" name="topic" value='<?= $subject['topic']; ?>'></label>
    <input type="hidden" name="topic_id" value="<?= $subject['id']; ?>">
    <!-- <button type="button">+</button> -->
    <!--增加選項-->
    <a href="../api/add_option.php?id=<?= $subject['id']; ?>">
        <input class='bg-info border-info text-light rounded' type="button" value="+">
    </a>

    <?php
    foreach ($options as $key => $opt) {
        echo "<label class='list-group-item list-group-item-action'>\n";
        echo   "選項" . ($key + 1) . "\n";
        echo   "<input type='text' name='options[]' value='{$opt['opt']}'>\n";
        echo   "<input type='hidden' name='opt_id[]' value='{$opt['id']}'>\n";
        echo "</label>\n";
    }

    ?>
    <div class="text-center">
        <input class="mt-2" type="submit" value="送出">
    </div>
</form>