<?php

$conn=require_once "config.php";
$username = $_POST["username"];
$password = $_POST["password"];
$password_hash = password_hash($password,PASSWORD_DEFAULT);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT * FROM accounts WHERE username = '$username'";
    $result = mysqli_query($db_link,$sql);
    //$row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) && $password == mysqli_fetch_assoc($result)["password"]){
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["id"] = mysqli_fetch_assoc($result)["id"];
        $_SESSION["username"] = $username;
        function_alert('$_SESSION["username"]');
        header("location: main.php");
    }
    else{
        echo "<script>alert('帳號或密碼錯誤!'); window.location='login.php';</script>";
    }
}
else{
    echo "<script>alert('Something wrong!'); window.location='index.php';</script>";
}
mysqli_close($link);
function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    
    return false;
}
?>