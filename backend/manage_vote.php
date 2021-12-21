<h1>問卷管理
    <a class="btn btn-primary rounded btn-sm" href="?do=add_subject_form">
        新增問卷
    </a>
</h1>
<?php
$subjects = all('topics');
echo "<ol class='list-group'>";
foreach ($subjects as $key => $value) {

    echo "<li class='list-group-item list-group-item-action'>";
    //題目
    echo "<a class='d-inline-block col-6' href='?do=vote_result&id={$value['id']}'>";
    echo $value['topic'];
    echo "</a>";
    //總投票數顯示

    $count = q("select sum(`count`) as '總計' from `options` where `topic_id`='{$value['id']}'");
    echo "<span class='d-inline-block text-center badge badge-success badge-pill'>";
    echo $count[0]['總計'];
    echo "</span>";
    //管理題目
    echo "<a href='?do=edit_subject&id={$value['id']}' class='d-inline-block col-1 text-center'>";
    echo "<button class='btn btn-info'>管理</button>";
    echo "</a>";

    //看結果按鈕
    echo "<a href='?do=vote_result&id={$value['id']}' class='d-inline-block col-2 text-center'>";
    echo "<button class='btn btn-primary'>觀看結果</button>";
    echo "</a>";
    
    //顯示投票是否截止
    echo "<span class='col-1'>";
    echo "<a href='../api/topic_status.php?id={$value['id']}'>";
    echo ($value['sh'] == 1) ? "投票中" : "已截止";
    echo "</a>";
    echo "</span>";

    //刪除投票
    echo "<a class='btn btn-danger col-1 ml-2' href='../api/del_subject.php?id={$value['id']}'>刪除</a>";

    echo "</li>";
}
echo "</ol>";

?>