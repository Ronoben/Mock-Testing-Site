<?php

	$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
	$wordTitle = $_POST['wordTitle'];
	$wordQuestion = $_POST['wordQuestion'];
	$wordAnswer = $_POST['wordAnswer'];
	$questionType = $_POST['questionType'];
	$questionset_id = $_POST['questionset_id'];
	$query = "Insert into question (title, question_type, content, answer, questionset_id) values ('$wordTitle', 'WA', '$wordQuestion', '$wordAnswer', '$questionset_id')";
	mysqli_query($db , $query ) ;
	header( 'location: studentHome.html' ) ;
	mysqli_close($db);
?>