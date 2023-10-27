<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

echo "INSERT INTO `nhanvien`(`IDNV`, `hoten`, `IDPB`, `diachi`) VALUES ('" . $_REQUEST['IDNV'] . "','" . $_REQUEST['hoten'] . "','" . $_REQUEST['IDPB'] . "','" . $_REQUEST['diachi'] . "')";

$query = "INSERT INTO `nhanvien`(`IDNV`, `hoten`, `IDPB`, `diachi`) VALUES ('" . $_REQUEST['IDNV'] . "','" . $_REQUEST['hoten'] . "','" . $_REQUEST['IDPB'] . "','" . $_REQUEST['diachi'] . "')";

$result = mysqli_query($link, $query);

if (!$result) die("Không thể thực hiện được câu lệnh SQL:" . mysqli_error($link));
else {
    echo "<h3> Thêm nhân viên thành công </h3> <br>";
    header("Location: ../main/loginIndex.php");
}
