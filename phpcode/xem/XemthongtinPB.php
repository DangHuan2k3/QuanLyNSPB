<!-- localhost/QuanLyNSPB/phpcode/XemthongtinPB.php -->
<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$result = mysqli_query($link, "select * from phongban");
?>

<body>
    <table border="1" width="100%">
        <caption>Danh sách thông tin phòng ban</caption>
        <tr>
            <th>IDPB</th>
            <th>Tên phong ban</th>
            <th>Mô tả</th>
            <th>Xem nhân viên</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['IDPB'] ?></td>
                <td><?php echo $row['tenpb'] ?></td>
                <td><?php echo $row['mota'] ?></td>
                <td>
                    <center>
                        <a href="XemthongtinNVPB.php?IDPB=<?php echo $row['IDPB'] ?>">xxx</a>
                    </center>
                </td>
            </tr>
        <?php
        }

        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    </table>
</body>

</html>