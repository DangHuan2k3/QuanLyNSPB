<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

echo "INSERT INTO `phongban`(`IDPB`, `tenpb`, `mota`) VALUES ('" . $_REQUEST['IDPB'] . "','" . $_REQUEST['tenpb'] . "','" . $_REQUEST['mota'] . "')";

$query = "INSERT INTO `phongban`(`IDPB`, `tenpb`, `mota`) VALUES ('" . $_REQUEST['IDPB'] . "','" . $_REQUEST['tenpb'] . "','" . $_REQUEST['mota'] . "')";

$result = mysqli_query($link, $query);

if (!$result) die("Không thể thực hiện được câu lệnh SQL:" . mysqli_error($link));
else {
    echo "<h3> Thêm nhân viên thành công </h3> <br>";
    header("Location: ../main/loginIndex.php");
}
