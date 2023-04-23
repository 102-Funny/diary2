<?php
session_start();
$conn=require_once "config.php";
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: main.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="utf-8">
    <meta name="author" content="FF">
    <meta name="description" content="放日記、祕密的好地方">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>暗格</title>
</head>
<body id="grass" style="background-color: rgb(215, 243, 250);">
    <div class="wrap">
        <div class="center" style="margin-top:5%;"><h1>暗格</h1></div>
        <div style="display:flex; justify-content:center; align-items:center; margin: 6% 2%;">
            <button onclick="window.location='regist.php'" class="btn">註冊</button>
            <button onclick="window.location='login.php'" class="btn">登入</button>
        </div>
    </div>
    <div style="overflow: hidden;"><div id="car"></div></div>
    <footer>
        Copyright © 2023 FF 版權所有
    </footer>
</body>
</html>