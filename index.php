<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function checkLoggedin(event) {
            var frame = document.getElementsByName('tab')[0];
            console.log(frame);
            <?php
            echo $_SESSION['loggedin'];
            if (!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin']) == 'false') {
            } else {
            ?>
                var frame = document.getElementsByName('tab')[0];
                frame.src = 'T2_login.php';
            <?php
            }
            ?>
        }
    </script>
</head>

<frameset rows="25%,*,10%" frameborder="0" onload="checkLoggedin(event)">
    <frame src="./phpcode/login/login.php"> </frame>
    <frameset cols="25%,*" frameborder="0">
        <frame src="T2.php" name="tab"> </frame>
        <frame src="T3.php" name="frameMainContent"> </frame>
    </frameset>
    <frame src="T5.htm"> </frame>
</frameset>




</html>