<?php

$mysqli = new mysqli("localhost", "root", "", "onlineexam");
 

if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 

$numx = $mysqli->real_escape_string($_REQUEST['num']);
$Questionx = $mysqli->real_escape_string($_REQUEST['question']);
$ans1x = $mysqli->real_escape_string($_REQUEST['ans1']);
$ans2x = $mysqli->real_escape_string($_REQUEST['ans2']);
$ans3x = $mysqli->real_escape_string($_REQUEST['ans3']);
$true_ansx = $mysqli->real_escape_string($_REQUEST['```']);
 
// Attempt insert query execution
$sql = "INSERT INTO `questions` (num,Question, ans1, ans2, ans3, true_ans) VALUES ($numx, $Questionx, $ans1x, $ans2x, $ans3x, $true_ansx )";
  
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>