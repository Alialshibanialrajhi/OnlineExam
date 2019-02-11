<!DOCTYPE html>
<?php session_start();
include'dbConfig.php'; ?> 
<html>
    <head><title>ALL USERS RESULTS</title>
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
	<h1> Current user: <?php echo "''". $_SESSION["user"]."''";?>  </h1>
	<h1>Your Exams Average Scores is:
	<?php
	
       include 'dbConfig.php';
      
        
		      $user = $_SESSION["user"];
      $userAVG = "select avg(score) from users where username= '".$user."'";
	  $myscore=mysqli_query($database_connection, $userAVG);
	  
		while($xx = mysqli_fetch_assoc($myscore)){echo $xx['avg(score)'];}
		
		?>
	
	
	
	</h1>
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
       include 'dbConfig.php';
      
        
        
        $sql ="select * from users";

     if ($done=mysqli_query($database_connection, $sql))
     {
		 
          while($rows = mysqli_fetch_assoc($done)){
              
           echo "<tr>";
           echo "<td>ID." . $rows['examId']."</td>";
           echo "<td>" . $rows['username']."</td>";
           echo "<td>" . $rows['score']." /5 </td>";
           echo "</tr>";
           
          }
         
    } else{ 
        echo mysqli_error($database_connection);
    }

    
        ?>
		
		<form action='index.php' method='GET'> <input id='yyyy' type='submit' value='Return to Home'  action='index.php' ></form>
    </body>
</html>
