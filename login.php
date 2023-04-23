<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="utf-8">
    <meta name="author" content="FF">
    <meta name="description" content="放日記、祕密的好地方">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>暗格-登入</title>
</head>
<body>
    <div class="wrap">
        <div class="center"><h1>登入</h1></div>
        <div class="center">
            <table>
                <form method="post" action="deal_login.php">
                    name:<input type="text" name="username">
                    password:<input type="password" name="password"><br>
                    <input type="submit" name="mysubmit">
                </form>
                </td></tr>
            </table>
            <img src="rabbit.gif">
        </div>
    </div>
    <footer>
        Copyright © 2023 FF 版權所有
    </footer>
</body>
</html>