<h2 class='text-center font-weight-bold py-3'>會員登入</h2>

<form action="./api/check_login.php" method="post">
    <table id="loginForm" class='table m-auto w-auto'>
        <tr>
            <td><label for="acc">帳號：</label></td>
            <td><input type="text" name="account" id="acc"></td>
        </tr>
        <tr>
            <td><label for="pwd">密碼：</label></td>
            <td><input type="password" name="password" id="pwd"></td>
        </tr>
        <tr>
            <td colspan="2" class="text-center py-3">
                <input type="submit" value="登入">
                <input type="reset" value="重罝">
            </td>
        </tr>
    </table>


</form>