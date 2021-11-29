編輯
<?php

$subject=select_one('topics', $_GET['id']);
$options=select_all('options',['topic_id'=>$_GET['id']]);
?>

<!-- $subject['topic']是欄位名稱 -->
<form action="../api/save_subject.php" method="POST" class="col-6 m-auto p-2">
    <label>主題: <input type="text" name="subject" value="<?= $subject['topic']; ?>"></label> 
    <label class="list-group-item">option1: <input type="text" name="options[]"></label>
    <label class="list-group-item">option2: <input type="text" name="options[]"></label>
    <label class="list-group-item">option3: <input type="text" name="options[]"></label>
    <label class="list-group-item">option4: <input type="text" name="options[]"></label>
    <label class="list-group-item">option5: <input type="text" name="options[]"></label>
    <?php
    foreach ($options as $opt) {
        echo "<label class='list-group-item'>";
        echo "選項" . ($key+1);
        echo "<input type='text' name='options[]' value='{$opt['opt']}'>";
        echo "</label>";
    }

?>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>