<head>

</head>

<body>
    <form method="POST" name="formTimKiem" action="../timkiem/xulitimkiem.php" onsubmit="formSubmit(event)">
        <caption>Nhập thông tin nhân viên để tìm kiếm nhân viên</caption>
        <table>
            <tr>
                <td>
                    <input type="radio" name="property" value="IDNV" id="IDNV" checked="true">
                    <label for="">ID</label>
                </td>
                <td>
                    <input type="radio" name="property" value="hoten" id="Hoten">
                    <label for="">Họ tên</label>
                </td>
                <td>
                    <input type="radio" name="property" value="diachi" id="Diachi">
                    <label for="">Địa chỉ</label>
                </td>
            </tr>
        </table>
        <input type="text" name="info_text" id="info_text">
        <input type="submit" value="OK">
    </form>

    <script>
        function checkValidForm() {
            var info_text = document.formTimKiem.info_text;

            console.log(info_text.value === "");

            return !(info_text.value === "");
        }

        function formSubmit(event) {
            event.preventDefault();

            if (!checkValidForm()) {
                alert('Chưa nhập đủ thông tin, vui lòng thử lại');
                return;
            }

            document.formTimKiem.submit();
        }
    </script>
</body>