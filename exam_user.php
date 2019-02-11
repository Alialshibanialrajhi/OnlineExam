<?php
session_start();
 $_SESSION['user'] = $_POST['username'];
 $user = $_SESSION['user'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Mystyle.css" rel="stylesheet" >
         <script src="jq/jquery-2.2.4.min.js" ></script>
        <script>
        $(document).ready(function(){
            $("span").css("color","#000066"); 
            $("body").css("background-image","url(images/ab7sX4F.jpg");
    });
        
        </script>


    </head>
    <body>

        <p id="p1">Hello <span> <?php echo"''". $user ."''"?> </span>Please Choose the correct answer!</p>
        <form name="exam" method="post" id="form" >
            <div class="bk-foto">
                <?php
                //Database connection page
                include 'dbConfig.php';

                //Count for inputs name
                $plus = 0;

                $sql = "SELECT question, ans1,ans2,ans3"
                        . ",true_ans FROM questions order by RAND() LIMIT 1,5 ";

                if ($result = mysqli_query($database_connection, $sql)) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $plus++;
                        //inputs name :a1,a2..
                        $name = 'a' . $plus;


                        $row1 = htmlentities($row['ans1']);
                        $row2 = htmlentities($row['ans2']);
                        $row3 = htmlentities($row['ans3']);
                        $row4 = htmlentities($row['true_ans']);




                        echo "<div  class='container'>" . $row['question'] . "</div>" . "<br>";
                        //Questions 

                        echo "<input class='option'  type ='radio' name = '$name' value='$row1'/>"
                        . $row1 . "<br>"; //Ans1

                        echo "<input  class='option'  type ='radio' name ='$name' value='$row2'/>"
                        . $row2 . "<br>"; //Ans2

                        echo "<input  class='option'  type ='radio' name ='$name' value='$row3' />"
                        . $row3 . "<br>" . "<br>"; //Ans3

                        echo "<input  class='trueAns'  type ='hidden' name ='$name' value='$row4' />";
                        //TruAns
                    }
                }
                mysqli_close($database_connection);
                ?>
            </div>            
            <div class="buttons">

                <input class="sec_submit" type="submit" value="Result" onclick="return calculate_score()" >
                <input class="sec_submit" type="button" value="Show previos results" onclick="location.href='results.php'" >
                <input class="sec_submit" type="button" value="Re-exam" onclick="location.reload()">
            </div>
        </form> 


        <script>


            function calculate_score() {
                var score = 0;
                var options = document.getElementsByClassName("option");//class for questions
                var correct = document.getElementsByClassName("trueAns");//class for correct answers


                 var c = -1;//counter for correct array
                for (var i = 0; i < options.length; i++) {
                
                    if (i % 3 == 0)
                    {
                        c++;
                    }
                    if (options[i].checked == true) {

                        if (options[i].value == correct[c].value) {
                            score++;
                            
                        }
                    }


                }
                 alert("You Got "+score+" Out of 5");
                 
             var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange =function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    
                }
            }
           xmlhttp.open("GET","insert.php?score="+score,true);
           xmlhttp.send();
            
        return false;
    }

          
        </script>


    </body>
</html>
