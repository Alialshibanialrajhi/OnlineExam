<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <?php
       include 'dbConfig.php';
       $score=$_GET['score'];
       $user = $_SESSION['user'];
       
        
        $sql ="INSERT INTO `users`(`username`,`score`) VALUES ('$user','$score')  ";

     if (mysqli_query($database_connection, $sql))
     {
         
    } else{ 
        echo mysqli_error($database_connection);
    }

    
        ?>
		
    </body>
</html>
