<?php
echo "UPDATE `nhanvien` SET `hoten`='" . $_REQUEST['hoten'] . "',`IDPB`='" . $_REQUEST['IDPB'] . "',`diachi`='" . $_REQUEST['diachi'] . "' WHERE IDNV LIKE '" . $_REQUEST['IDNV'] . "'";

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$query = "UPDATE `nhanvien` SET `hoten`='" . $_REQUEST['hoten'] . "',`IDPB`='" . $_REQUEST['IDPB'] . "',`diachi`='" . $_REQUEST['diachi'] . "' WHERE IDNV LIKE '" . $_REQUEST['IDNV'] . "'";

$result = mysqli_query($link, $query);

if (!$result) die("Không thể thực hiện được câu lệnh SQL:" . mysqli_error($link));
else {
    header("Location: ../capnhat/capnhat.php");
}
