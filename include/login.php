<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
</head>
<body>
<?php 
   $page= "login";
    include("bar.php"); ?>
    <main>
        <h2>請登入</h2>
        <form action="handle_login.php" method="POST">
            <div>
                <label for="username">帳號：</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">密碼：</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="登入">
        </form>
    </main>
    <?php include("footer.html");?>

</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
</head>
<body>
<?php 
   $page= "login";
    include("bar.php"); ?>
    <main>
        <h2>請登入</h2>
        <form action="handle_login.php" method="POST">
            <div>
                <label for="username">帳號：</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">密碼：</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="登入">
        </form>
    </main>
    <?php include("footer.html");?>

</body>
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
</html>