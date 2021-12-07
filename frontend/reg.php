<h2>註冊會員</h2>

<form action="./api/reg.php" method="post" id="regForm">
    <table>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="acc"></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="pwd"></td>
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
            <td>性別：</td>
            <td><input type="text" name="sex"></td>
        </tr>
        <tr>
            <td>生日：</td>
            <td><input type="date" name="birth"></td>
        </tr>
    </table>
    <div><input type="submit" value="確認送出"> </div>
</form>