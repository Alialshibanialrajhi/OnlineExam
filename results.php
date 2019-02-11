<!DOCTYPE html>
<?php 
session_start();
include'dbConfig.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Mystyle.css" rel="stylesheet" >
        <script src="jq/jquery-2.2.4.min.js" ></script>
        <script>
        $(document).ready(function(){
            $("tr:odd").css("background","#ececec");    
            $("tr:even").css("background","#72b8e0");
            $("h1").css("color","#000066");   
            $("body").css("background-image","url(images/ab7sX4F.jpg");
    });
        
        </script>
    </head>
    <body>
        <h1> Welcome <?php echo "''". $_SESSION["user"]."''";?> Your Exams Scores is: </h1>
      
        <table>
            <thead>
			
         <tr>
            <th>Exam ID</th>
             <th>Name </th>
              <th>Score</th>
			  
         </tr>
		 
            </thead>
     <tbody>
       
<?php
    
      $user = $_SESSION["user"];
      $finduser = "select * from users where username = '$user'";
      if ($done = mysqli_query($database_connection, $finduser)){
          while($rows = mysqli_fetch_assoc($done)){
              
           echo "<tr>";
           echo "<td>ID." . $rows['examId']."</td>";
           echo "<td>" . $rows['username']."</td>";
           echo "<td>" . $rows['score']." /5 </td>";
           echo "</tr>";
           
          }
		  
      }      
     else{  
        echo mysqli_error($database_connection);
    }

    
?>
    
     </tbody> 
        </table> 
     <form action='all result.php' method='GET'> <input id='yyyy' type='submit' value='show all users results'  action='all result.php' ></form>
    </body>
</html>
