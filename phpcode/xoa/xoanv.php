<!-- localhost/QuanLyNSPB/phpcode/XemthongtinNV.php -->
<?php
session_start();

?>

<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$result = mysqli_query($link, "select * from nhanvien");
?>

<body>
    <form action="xulixoanv.php" method="post">
        <table border="1" width="100%">
            <tr>
                <th>IDNV</th>
                <th>Họ tên</th>
                <th>IDPB</th>
                <th>Địa chỉ</th>
                <th>Xoá</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['IDNV'] ?></td>
                    <td><?php echo $row['hoten'] ?></td>
                    <td><?php echo $row['IDPB'] ?></td>
                    <td><?php echo $row['diachi'] ?></td>
                    <td><input type="checkbox" name="<?php echo $row['IDNV'] ?>" value="<?php echo $row['IDNV'] ?>" class="checkbox"></td>
                </tr>
            <?php
            }

            mysqli_free_result($result);
            mysqli_close($link);
            ?>

        </table>
        <input type="submit" value="Xoá">
    </form>
</body>
<script>
</script>

</html>