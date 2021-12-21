<?php
$sql = "SELECT * from `users` where `id`='{$_GET['id']}'";
$user = $pdo->query($sql)->fetch();
// dd($user);
?>
<h2 class="text-center mt-3 font-weight-bold">編輯會員資料</h2>
<div class="container" style="height:508px">
  <form action="../api/back_edit_user.php?id=<?= $user['id'] ?>" method="POST" id="regForm" class="text-center">
    <table class="m-auto">
      <tr>
        <input type="hidden" name="id" value="<?=$user['id']?>">
        <td>帳號 : </td>
        <td><?= $user['account']; ?></td>
      </tr>
      <tr>
        <td>信箱 : </td>
        <td><input type="text" name="email" value="<?= $user['email']; ?>"></td>
      </tr>
      <tr>
        <td>姓名 : </td>
        <td><input type="text" name="name" value="<?= $user['name']; ?>"></td>
      </tr>
      <tr>
        <td>性別 : </td>
        <td>
          <?php
          if ($user['gender'] == 1) { ?>
            <input type="radio" id="1" name="gender" value="1" checked>男
            <input type="radio" id="0" name="gender" value="0">女
          <?php } else { ?>
            <input type="radio" id="1" name="gender" value="1">男
            <input type="radio" id="0" name="gender" value="0" checked>女
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>生日 : </td>
        <td><input type="date" name="birthday" value="<?= $user['birthday']; ?>"></td>
      </tr>
      <tr>
        <td>是否為admin: </td>
        <?php
          if ($user['admin'] == 1) { ?>
        <td><input type="checkbox" name="admin" value="1" checked></td>
        <?php } else { ?>
        <td><input type="checkbox" name="admin" value="0"></td>
        <?php } ?>
      </tr>
    </table>
    <div class="my-3"><input onclick="alert('修改成功');" type="submit" value="確認送出"></div>
  </form>
</div>