<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$query = "select * from nhanvien where " . $_REQUEST['property'] . " like '" . $_REQUEST['info_text'] . "'";

$result = mysqli_query($link, $query);
?>

<body>
    <table border="1" width="100%">
        <caption>
            <h3>Các nhân viên phù hợp</h3>
        </caption>
        <tr>
            <th>IDNV</th>
            <th>Họ tên</th>
            <th>IDPB</th>
            <th>Địa chỉ</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['IDNV'] ?></td>
                <td><?php echo $row['hoten'] ?></td>
                <td><?php echo $row['IDPB'] ?></td>
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