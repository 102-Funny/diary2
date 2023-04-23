<?php
session_start();
  $conn = mysqli_connect("localhost", "Funny", "Fanny60714") or die("MySQL 伺服器連結失敗 <br>");
  $db = mysqli_select_db($conn,"diary") or die("choose failed");
  $username = $_SESSION["username"];
  if (empty($_GET['id'])) {
    die('請輸入 id');
  }
  $id = $_GET['id'];
  $sql = sprintf(
    'delete from '.$username.' where id = %d',
    $id
  );
  $result = $conn->query($sql);
  if (!$result) {
    die($conn->error);
  }
  if ($conn->affected_rows >= 1) {
    echo '已成功刪除此筆資料！';
  } else {
    echo '查無此資料';
  }
  // 如果刪除成功
  header('Location: main.php');
?>