<?php
 session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
         <link href="Mystyle.css" rel="stylesheet" >
        <title>PHP Online Exam</title>
    </head>
    <body>

        <header>
            <div>
                Test Your PHP Knowledge Online!
            </div>
        </header>

                <form method="post" action="exam_user.php" id="form-user">
                    <span class="name">Please Enter Your Name*</span>
                    <input id="username" type="text" name="username" required="required" >
                    
               
                <br><br>
                <input class="first_submit" type="submit" value="Sign in">
                <input class="f_submit" type="reset" value="Reset">
                
            </form>
        
<a href='newq.html'><b>Create your own question!</b></a>
    </body>
</html>
