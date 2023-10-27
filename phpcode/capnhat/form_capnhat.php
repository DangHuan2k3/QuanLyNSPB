<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "baitapapdung");

$result = mysqli_query($link, "select * from nhanvien where IDNV like '" . $_REQUEST['IDNV'] . "'");

$nhanvien = mysqli_fetch_array($result);
?>


<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="../capnhat/xulicapnhatnv.php?IDPB='<?php echo $nhanvien['IDNV'] ?>'" name="formCapNhat" method="post" onsubmit="submitForm(event)">
        <table>
            <tr>
                <td><label for="IDNV">Mã nhân viên</label></td>
                <td><input type="text" name="IDNV" id="" placeholder="VD: NV01" value="<?php echo $nhanvien['IDNV'] ?>" readonly></td>
            </tr>
            <tr>
                <td><label for="hoten">Họ tên nhân viên</label></td>
                <td><input type="text" name="hoten" id="" placeholder="VD: Nguyễn Văn A" value="<?php echo $nhanvien['hoten'] ?>"></td>
            </tr>
            <tr>
                <td><label for="diachi">Địa chỉ nhân viên</label></td>
                <td><input type="text" name="diachi" id="" placeholder="Số nhà, tên đường, ... " value="<?php echo $nhanvien['diachi'] ?>"></td>
            </tr>
            <tr>
                <td><label for="IDPB">Chọn phòng ban</label></td>
                <td>
                    <select name="IDPB" id="">
                        <!-- Load list PB -->
                        <?php
                        $link = mysqli_connect("localhost", "root", "");

                        mysqli_select_db($link, "baitapapdung");

                        $query = "select * from phongban";

                        $result = mysqli_query($link, $query);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row['IDPB'] ?>" <?php if (strcmp($nhanvien['IDPB'], $row['IDPB']) == 0) echo 'selected'; ?>><?php echo $row['tenpb'] ?></option>
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
        var maNV = document.formCapNhat.IDNV.value;

        if (maNV === "") {
            alert('chưa nhập mã nhân viên');
            return false;
        }

        var hoTen = document.formCapNhat.hoten.value;

        if (hoTen === "") {
            alert('chưa nhập họ tên cho nhân viên');
            return false;
        }

        var diachi = document.formCapNhat.diachi.value;

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

        document.formCapNhat.submit();
    }
</script>