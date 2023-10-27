<!-- localhost/QuanLyNSPB/phpcode/XemthongtinNV.php -->
<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$result = mysqli_query($link, "select * from nhanvien");
?>

<body>
    <table border="1" width="100%">
        <tr>
            <th>IDNV</th>
            <th>Họ tên</th>
            <th>IDPB</th>
            <th>Địa chỉ</th>
            <th>Cập nhật</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['IDNV'] ?></td>
                <td><?php echo $row['hoten'] ?></td>
                <td><?php echo $row['IDPB'] ?></td>
                <td><?php echo $row['diachi'] ?></td>
                <td><a href="../capnhat/form_capnhat.php?IDNV=<?php echo $row['IDNV'] ?>"><?php echo $row['IDNV'] ?></a></td>
            </tr>
        <?php
        }

        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    </table>
</body>

</html>