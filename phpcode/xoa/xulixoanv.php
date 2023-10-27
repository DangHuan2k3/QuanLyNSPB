<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$query = "select IDNV from nhanvien";
$rs = mysqli_query($link, $query);

while ($row = mysqli_fetch_array($rs)) {
    $myID = $_REQUEST[$row['IDNV']];
    $query = "DELETE FROM nhanvien where IDNV = '$myID'";
    $rsl = mysqli_query($link, $query);
}

//header('Location: xoanv.php');
