<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="utf-8">
    <meta name="author" content="FF">
    <meta name="description" content="放日記、祕密的好地方">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>暗格-diary</title>
</head>
<body>
    <div class="wrap">
        <div class="center">
            <h1>Diary</h1>
        </div>
        <div class="center">
            
            <form method="post" action="deal_diary.php">
                <input type="text" name="topic" placeholder="標題" required><br>
                <textarea name="content" rows="10" cols="50" placeholder="內容" required></textarea><br>
                <input type="submit" name="mysubmit" class="btn2">
                <button onclick="window.location='main.php'">回去</button>
            </form>
        </div>
    </div>
    <footer>
        Copyright © 2023 FF 版權所有
    </footer>
</body>
</html>