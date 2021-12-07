<form action="../api/upload_ad.php" method="POST" enctype="multipart/form-data">

<!-- 只能用背的 enctype="multipart/form-data" -->
<div>
<label for="upload">選擇檔案</label>
<input type="file" name="name" id="upload">
</div>
<div>
<label for="intro">說明</label>
<input type="text" name="intro" id="upload">
</div>
<input type="submit" value="上傳">

</form>

<h3>列表管理</h3>

<table>
    <tr>
        <td>圖片</td>
        <td>說明</td>
        <td>狀態</td>
        <td></td>
    </tr>
<?php
$rows=select_all('ads');
foreach ($row as $row) {
    echo "<tr>";
    echo "<td>";
    echo "<img src='/img/'{$row['name']}'>";
    echo "</td>";
    echo "<td>";
    echo $row['intro'];
    echo "</td>";
    echo "<td>";
    echo ($row['sh']==1)?"顯示中":"未上架";
    echo "</td>";
    echo "<td>";
    echo "<button>修改</button>";
    echo "<button>重新上傳</button>";
    echo "<a class='btn btn-danger' href='../api/del_ad.php?id={$row['id']}'>刪除</a>";
    echo "</td>";
    echo "</tr>";
}
?>
</table>