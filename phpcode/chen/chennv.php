<head>
    <meta charset="UTF-8">
    <script>
        function checkExistID() {
            var IDNVs = [];
            <?php

            $link = mysqli_connect("localhost", "root", "");

            mysqli_select_db($link, "baitapapdung");

            $query = "select IDNV from nhanvien";

            $result = mysqli_query($link, $query);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                IDNVs.push("<?php echo $row['IDNV'] ?>");
            <?php
            }
            ?>

            var IDNVnew = document.formChenNV.IDNV.value;

            if (IDNVs.includes(IDNVnew)) {
                alert('Tồn tại nhân viên có ID này rồi');
                document.formChenNV.IDNV.value = "";
                document.formChenNV.IDNV.focus();
            }

        }
    </script>
</head>

<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$query = "select IDNV from nhanvien";

$IDNVs = mysqli_query($link, $query);
?>

<body>
    <form action="../chen/xulichennv.php" name="formChenNV" method="post" onsubmit="submitForm(event)">
        <table>
            <tr>
                <td><label for="IDNV">Mã nhân viên</label></td>
                <td><input type="text" name="IDNV" id="" placeholder="VD: NV01" onblur="checkExistID()"></td>
            </tr>
            <tr>
                <td><label for="hoten">Họ tên nhân viên</label></td>
                <td><input type="text" name="hoten" id="" placeholder="VD: Nguyễn Văn A"></td>
            </tr>
            <tr>
                <td><label for="diachi">Địa chỉ nhân viên</label></td>
                <td><input type="text" name="diachi" id="" placeholder="Số nhà, tên đường, ... "></td>
            </tr>
            <tr>
                <td><label for="IDPB">Chọn phòng ban</label></td>
                <td>
                    <select name="IDPB" id="">
                        <!-- Load list Phong ban -->
                        <?php
                        $link = mysqli_connect("localhost", "root", "");

                        mysqli_select_db($link, "baitapapdung");

                        $query = "select * from phongban";

                        $result = mysqli_query($link, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row['IDPB'] ?>"><?php echo $row['tenpb'] ?></option>
                        <?php }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="OK">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

<script>
    function checkValidForm() {
        var maNV = document.formChenNV.IDNV.value;

        if (maNV === "") {
            alert('chưa nhập mã nhân viên');
            return false;
        }

        var hoTen = document.formChenNV.hoten.value;

        if (hoTen === "") {
            alert('chưa nhập họ tên cho nhân viên');
            return false;
        }

        var diachi = document.formChenNV.diachi.value;

        if (diachi === "") {
            alert('chưa nhập địa chỉ cho nhân viên');
        }

        return true;
    }

    function submitForm(event) {
        event.preventDefault();

        if (!checkValidForm()) {
            return;
        }

        document.formChenNV.submit();
    }
</script>