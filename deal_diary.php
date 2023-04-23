<?php
session_start();
$username = $_SESSION["username"];
$db_link = mysqli_connect("localhost", "Funny", "Fanny60714") or die("MySQL 伺服器連結失敗 <br>");
$db = mysqli_select_db($db_link,"diary") or die("choose failed");

$topic = $_POST["topic"];
$content = mysqli_real_escape_string($db_link,nl2br($_POST["content"]));
$now = date("Y-m-d H:i:s");
$sql = "insert into $username(topic,content,reg_date) values('$topic','$content','$now')";
$query = mysqli_query($db_link,"SELECT * FROM $username") or die("not connect newstable");
$db_link->query($sql);
if(!$query){
    print("error");
}
else{
    echo "<script>alert('成功!'); window.location='main.php';</script>";
}
//header("location:main.php");
?>