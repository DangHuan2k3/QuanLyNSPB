<head>
    <meta charset="UTF-8">
    <script>
        function checkExistID() {
            var IDPB = [];
            <?php

            $link = mysqli_connect("localhost", "root", "");

            mysqli_select_db($link, "baitapapdung");

            $query = "select IDPB from phongban";

            $result = mysqli_query($link, $query);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                IDPB.push("<?php echo $row['IDPB'] ?>");
            <?php
            }
            ?>

            var IDPBnew = document.formChenPB.IDPB.value;

            if (IDPB.includes(IDPBnew)) {
                alert('Tồn tại nhân viên có ID này rồi');
                document.formChenPB.IDPB.value = "";
                document.formChenNV.IDPB.focus();
            }
        }
    </script>
</head>

<body>
    <form action="../chen/xulichenpb.php" name="formChenPB" method="post" onsubmit="submitForm(event)">
        <table>
            <tr>
                <td><label for="IDPB">Mã phòng ban</label></td>
                <td><input type="text" name="IDPB" id="" placeholder="VD: PB01" onblur="checkExistID()"></td>
            </tr>
            <tr>
                <td><label for=" tenpb">Tên phòng ban</label></td>
                <td><input type="text" name="tenpb" id="" placeholder="VD: Công nhân, Kế toán"></td>
            </tr>
            <tr>
                <td><label for="mota">Mô tả phòng ban</label></td>
                <td>
                    <textarea name="mota" id="" cols="20" rows="5"></textarea>
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
        var maNV = document.formChenPB.IDPB.value;

        if (maNV === "") {
            alert('chưa nhập mã phòng ban');
            return false;
        }

        var hoTen = document.formChenPB.tenpb.value;

        if (hoTen === "") {
            alert('chưa nhập tên phòng ban');
            return false;
        }

        var diachi = document.formChenPB.mota.value;

        if (diachi === "") {
            alert('chưa nhập mô tả cho phòng ban');
        }

        return true;
    }

    function submitForm(event) {
        event.preventDefault();

        if (!checkValidForm()) {
            return;
        }

        document.formChenPB.submit();
    }
</script>