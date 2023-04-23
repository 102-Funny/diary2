<?php
session_start();
$conn=require_once "config.php";
$now = date("Y-m-d H:i:s");
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$check="SELECT * FROM accounts WHERE username='$username'";
if(mysqli_num_rows(mysqli_query($db_link,$check))){
    echo "<script>alert('此名稱已使用!'); window.location='regist.php';</script>";
}
else if($email && $username && $password && mysqli_num_rows(mysqli_query($db_link,$check))==0){
    $sql = "SELECT * FROM accounts WHERE username ='$username' and password = '$password'";
    $result = mysqli_query($db_link, $sql);   
        //返回一個數值
    $rows=mysqli_num_rows($result);
    if(!$rows){
        $sql = "insert into accounts(username,password,time) values('$username','$password','$now')";
        $query = mysqli_query($db_link,"SELECT * FROM accounts") or die("not connect newstable");
        $db_link->query($sql);
        $sql = "insert into email(username,email) values('$username','$email')";
        $db_link->query($sql);
        if(!$query){
            print("news error");
        }
        else{
            echo "<script>alert('註冊成功!請重新登入'); window.location='login.php';</script>";
        }
    }
    else{
        print("已有此帳號");
    }
}
else{
    echo "<script>alert('請輸入email、username、password!'); window.location='regist.php';</script>";
    //header("Location: regist.php");
}
?>