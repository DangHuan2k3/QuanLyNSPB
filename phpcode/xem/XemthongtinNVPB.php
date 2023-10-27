<?php
$IDPB = $_REQUEST['IDPB'];

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$result = mysqli_query($link, "select * from nhanvien where IDPB = '$IDPB'");
?>

<body>
    <table border="1" width="100%">
        <caption>Nhân viên phòng ban có mã <?php echo $IDPB ?></caption>
        <tr>
            <th>IDNV</th>
            <th>Họ tên</th>
            <th>Địa chỉ</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['IDNV'] ?></td>
                <td><?php echo $row['hoten'] ?></td>
                <td><?php echo $row['diachi'] ?></td>
            </tr>
        <?php
        }

        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    </table>
</body>

</html>