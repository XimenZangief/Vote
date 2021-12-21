<h2 class="text-center font-weight-bold">會員管理</h2>
<?php include_once "../api/db.php"; ?>
<table class="table table-striped container-fluid text-center">
    <tr>
        <td class='col-4'>會員帳號</td>
        <td class='col-4'>管理</td>
    </tr>
    <?php
    $rows = all('users');
    // dd($rows);
    foreach ($rows as $key => $value) {
        echo "<tr>";
        echo "<td class='col-4 align-middle'>";
        if($value['admin']==1){
            echo "<span><i class='fas fa-wrench'></i></span> ";
        }
        echo $value['account'];
        echo "</td>";
        echo "<td class='col-4'>";
        echo "<a class='btn btn-info mx-2' href='?do=edit_user&id={$value['id']}'>修改</a>";
        echo "<a class='btn btn-danger mx-2' href='../api/del_user.php?id={$value['id']}'>刪除</a>";
        "</td>";
        echo "</tr>";
    }
    ?>
</table>