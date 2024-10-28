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
     <div>
     <form action="check.php" method="post">
       <label for="account">account</label><br>
       <input type="text" id="account" name="account" value="account"><br>
       <label for="passwrod">passsword</label><br>
        <input type="text" id="paaword" name="password" value="password"><br>
        <input type="submit" value="Submit">
</form>
     </div> 
</body>
</html>



