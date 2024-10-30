<?php
session_start();
if(!isset($_POST['account'])){
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
    exit();
}
$acc=$_POST['account'];
$pw=$_POST['password'];

if($acc=='admin'&& $pw=='1234'){
    echo "帳密正確：登入成功";
    $_SESSION['login']=$acc;
    echo "<br><a href='login.php'>回首頁</a>";
}else{
    echo "帳密錯誤：登入失敗";
}

?>