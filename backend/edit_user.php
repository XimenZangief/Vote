<?php
$sql = "SELECT * from `users` where `account`='{$_SESSION['user']}'";
$user = $pdo->query($sql)->fetch();
// dd($user);
?>
<h2 class="text-center mt-3 font-weight-bold">編輯會員資料</h2>
<div class="container" style="height:508px">
  <form action="../api/edit_user.php?user=<?= $user['account'] ?>" method="post" id="regForm" class="text-center">
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
    </table>
    <div class="my-3"><input type="submit" value="確認送出"></div>
  </form>
</div>
<div class="container text-center mt-5">

  <a href="index.php">回到問卷表列</a>
</div>