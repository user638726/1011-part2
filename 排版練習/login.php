<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        div{
            margin: 0 auto;
            width:600px;
            height:600px;
            background: skyblue;
            
        }
        form{
            text-align:center;
            padding:100px;
        }
    </style>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['login'])){
?>
    <div class="login-container">
        <h2>登入</h2>
        <form action="check_acc.php" method="post">
            <input type="text" name="acc" placeholder="使用者名稱" required>
            <input type="password" name="pw" placeholder="密碼" required>
            <input type="submit" value="登入">
        </form>
    </div>

    <?php
}else{
?>
        <div>
            你已登入
        </div>
<?php
}
?>
</body>
</html>



