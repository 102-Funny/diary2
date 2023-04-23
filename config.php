<?php 
$db_link = mysqli_connect("localhost", "Funny", "Fanny60714") or die("MySQL 伺服器連結失敗 <br>");
$db = mysqli_select_db($db_link,"account") or die("choose failed");
?>