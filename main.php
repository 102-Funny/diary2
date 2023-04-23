<?php
session_start();  //很重要，可以用的變數存在session裡
$conn= new mysqli("localhost","Funny","Fanny60714","diary") or die("failed");
$username = $_SESSION["username"];
//echo "<script>alert('$username');</script>";
//echo "<h1>Hi $username</h1>";
//echo "<a href='logout.php'>登出</a>";
  
$sql = "CREATE TABLE IF NOT EXISTS {$username}  (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
topic TEXT,
content TEXT,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "";
} 
else {
    echo "創建數據表錯誤: " . $conn->error;
}
$result = $conn->query('select * from '.$username.';');
//$total_fields = mysqli_num_fields($result); // 取得欄位數
//$total_records = mysqli_num_rows($result);  // 取得記錄數
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="utf-8">
    <meta name="author" content="FF">
    <meta name="description" content="放日記、祕密的好地方">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>暗格-主頁</title>
</head>
<body>
    <div class="wrap">
        <div class="center"><h1>暗格</h1></div>
        <div class="center" style="margin-top:5px;">
            <button onclick="window.location='logout.php'">登出</button>
            用戶名稱:<?php echo "$username" ?>
            
        </div>
        <div class="center">
        <button onclick="window.location='diary.php'">新增</button>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>標題</th>
                        <th>內容</th>
                        <th>上傳時間</th>
                        <th>刪除</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //if(mysqli_num_rows($result) == 0){
                    //  echo "無資料";
                    //}
                    //else if(mysqli_num_rows($result)){
                        //foreach($result as $row){
                        if(!$result){
                            die($conn->error);
                        }
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>' . $row['topic'] . '</td>';
                            echo '<td style="white-space:pre-wrap;">' . $row['content'] . '</td>';
                            echo '<td>' . $row['reg_date'] . '</td>';
                            echo '<td><a href="delete.php?id=' . $row['id'] . '">刪除</a></td></tr>';
                        }
                        
                        //}
                    //}
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer>
        Copyright © 2023 FF 版權所有
    </footer>
</body>
</html>