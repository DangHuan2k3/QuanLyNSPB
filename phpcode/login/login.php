<?php
session_start();
$_SESSION['loggedin'] = 'false';
?>

<head>
    <meta charset="UTF-8">
</head>



<body bgcolor="#efc592">
    <form name="formLogin" id="formLogin" action="../login/xulilogin.php" method="POST" onsubmit="submitLogin(event)">
        <table border="0" id="formLoginTable">
            <caption>Đăng nhập</caption>
            <tr>
                <td>Username</td>
                <td><input type="text" name="txtUsername"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="txtPassword"></td>
            </tr>
            <tr>
                <td></td>
                <td><label for="error" style="color: red;" id="lbError"></label></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="OK">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <script>
        function resetFormLogin() {
            document.formLogin.txtUsername.value = "";
            document.formLogin.txtPassword.value = "";
        }

        function checkValidFormLogin() {
            var username = document.formLogin.txtUsername.value;
            var password = document.formLogin.txtPassword.value;
            var lbError = document.getElementById('lbError');
            if (!lbError)
                return;

            if (username === "" || password === "") {
                // reset form
                resetFormLogin();

                return false; // Sử dụng lbError để thiết lập nội dung label
            }

            return true;
        }

        function submitLogin(event) {
            event.preventDefault();

            if (!checkValidFormLogin()) {
                alert('chưa nhập đủ thông tin đăng nhập');
                return;
            }

            document.formLogin.submit();
        }
    </script>
</body>