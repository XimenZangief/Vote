編輯
<?php

$subject=select_one('topics', $_GET['id']);
$options=select_all('options',['topic_id'=>$_GET['id']]);
?>

<!-- $subject['topic']是欄位名稱 -->
<form action="../api/edit_subject.php" method="POST" class="col-6 m-auto p-2">
    <label>主題: <input type="text" name="topic" value="<?= $subject['topic']; ?>"></label> 
    <input type="hidden" name="topic_id" value="<?=$subject['id']; ?>">
    <?php
    foreach ($options as $key => $opt) {
        echo "<label class='list-group-item'>";
        echo "選項" . ($key+1);
        echo "<input type='text' name='options[]' value='{$opt['opt']}'>";
        echo "<input type='hidden' name='opt_id[]' value='{$opt['opt']}'>";
        echo "</label>";
    }
    //作業，增加/刪除選項

    //選項不足4個則補到4個
    if(count($options)<=4){
        for($i=0;$i<(4-count($options));$i++){
            echo "<label class='list-group-item'>";
            echo "選項" . ($count($options)+1+$i);
            echo "<input type='text' name='options[]' value=''>";
            echo "<input type='hidden' name='opt_id[]' value=''>";
            echo "</label>";    
        }
    }
?>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>