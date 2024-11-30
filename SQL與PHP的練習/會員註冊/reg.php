<<<<<<< HEAD
<?php
   
   $sql="insert into `member`(`acc`,`pw`,`email`,`tel`) values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['email']}','{$_POST['tel']}')";
   $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
   $pdo=new PDO($dsn,'root','');
   
   if($pdo->exec($sql)){
   
       header("location:reg_form.php?status=1");
   
   }else{
   
       header("location:reg_form.php?status=0");
   
   }
   
=======
<?php
   
   $sql="insert into `member`(`acc`,`pw`,`email`,`tel`) values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['email']}','{$_POST['tel']}')";
   $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
   $pdo=new PDO($dsn,'root','');
   
   if($pdo->exec($sql)){
   
       header("location:reg_form.php?status=1");
   
   }else{
   
       header("location:reg_form.php?status=0");
   
   }
   
>>>>>>> 4a934a5dc1e68a9427d400dc0cc4ad9eb6aebac5
?>