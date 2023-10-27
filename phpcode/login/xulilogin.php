<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$query = "select * from admin where username like '" . $_POST['txtUsername'] . "'" . " and password like '" . $_POST['txtPassword'] . "'";

$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0) {
    echo "Dang nhap thanh cong";
?>
    <script>
        window.top.location.href = '../../loginIndex.php';
    </script>
<?php
    //header("Location: ../../loginIndex.php");
} else {
    echo "Dang nhap that bai";
    sleep(1);
?>
    <script>
        window.top.location.href = '../../index.php';
    </script>
<?php
}
