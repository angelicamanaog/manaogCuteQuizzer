<?php

$question_answer = $POST['question_answer'];


if (!empty($question_answer))
{
	$host = "localhost";
	$question_answer = "";

}

$conn = new mysqli($host, $question_answer);

if(mysqli_connect_error()) 
{
	die('Connect Error(.mysqli_connect_errno().')'. mysqli_connect_error());
} 
?>