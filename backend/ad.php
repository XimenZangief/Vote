<h2 class="text-center font-weight-bold">廣告管理</h2>

<div class="row">
<div class="col-md-3 m-auto">
<form action="../api/upload_ad.php" method="post" enctype="multipart/form-data">

    <div class='custom-file m-auto d-block mb-2'>
        <label for="upload" class='custom-file-label'>選擇檔案</label>
        <input class="custom-file-input" type="file" name="name" id="upload">
    </div>
    <div class="mx-auto text-center m-2 input-group mb-2">
        <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
        <input class='form-control' type="text" name="intro" id="intro">
    </div>
    <div>
        <input type="submit" value="上傳" class="btn btn-primary px-3 text-center mx-5">
    </div>
</form>
</div>
<div class="col-md-9">
<table class="table table-striped text-center align-middle">
    <tr>
        <td>圖片</td>
        <td>說明</td>
        <td>狀態</td>
        <td>管理</td>
    </tr>
<?php 
$rows=all('ad');
foreach($rows as $row){
echo "<tr>";
echo "<td class='align-middle'>";
echo "<img src='../image/{$row['name']}' style='width:100px;height:75px'>";
echo "</td>";
echo "<td class='align-middle'>{$row['intro']}</td>";
echo "<td class='align-middle'>";
echo "<a href='../api/change_status.php?id={$row['id']}'>";
echo ($row['sh']==1)?"顯示中":"未上架";
echo "</a>";
echo "</td>";
echo "<td class='align-middle'>";
echo "<a class='btn btn-info' href='?do=edit_ad&id={$row['id']}'>修改</a>";
// echo "<button>重新上傳</button>";
echo "<a class='btn btn-danger ml-2' href='../api/del_ad.php?id={$row['id']}'>刪除</a>";
"</td>";
 echo "</tr>";
}



?>
</table>
</div>
</div>