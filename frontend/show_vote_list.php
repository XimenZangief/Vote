<h1 class="text-center">問卷列表</h1>
<?php
$subjects = all('topics',['sh' => 1]);
echo "<ol class='list-group'>";
foreach ($subjects as $key => $value) {
    if (rows('options', ['topic_id' => $value['id']]) > 0) {
        echo "<li class='list-group-item list-group-item-action'>";
        //題目
        //有登入的會員才能使用投票功能
        if (isset($_SESSION['user'])) {
            echo "<a class='d-inline-block col-md-8' href='index.php?do=vote&id={$value['id']}'>";
            echo $value['topic'];
            echo "</a>";
        } else {
            echo "<span class='d-inline-block col-md-8'>" . $value['topic'] . "</span>";
        }

        //總投票數顯示
        $count = q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
        echo "<span class='d-inline-block text-center badge badge-info badge-pill'>";
        echo $count[0]['總計'];
        echo "</span>";

        //投票
        if (isset($_SESSION['user'])) {
            echo "<span class='col-1'>";
            echo "<a href='index.php?do=vote&id={$value['id']}'>";
            echo "<button class='btn btn-success'>投票</button>";
            echo "</a></span>";
        }


        //看結果按鈕
        echo "<a href='?do=vote_result&id={$value['id']}' class='d-inline-block col-2 text-center'>";
        echo "<button class='btn btn-primary'>觀看結果</button>";
        echo "</a>";
        echo "</li>";
    }
}
echo "</ol>";

?>