<h2 class="text-center font-weight-bold">註冊會員</h2>
<form action="./api/reg.php" method="post" id="regForm">
    <table class='table m-auto w-auto'>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>電子郵件：</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>生日：</td>
            <td><input type="date" name="birthday"></td>
        </tr>
        <tr>
            <td>性別：</td>
            <td>
                <input type="radio" id="1" name="gender" value="1">
                <label for="1">男&nbsp;</label>
                <input type="radio" id="0" name="gender" value="0">
                <label for="0">女&nbsp;</label>
            </td>
        </tr>
    </table>
    <div class='text-center'><input onclick="alert('註冊成功');" type="submit" value="確認送出"> </div>
</form>