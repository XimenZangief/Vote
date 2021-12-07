<h1>管理問卷</h1>

<a href="?do=add_subjects_form.php"><button>新增問卷</button></a>
    
<?php
$subjects=all('topics');
echo "<ol>";
foreach($subjects as $key => $value){
    echo "<li>";
}
?>