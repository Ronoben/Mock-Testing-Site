<?php

	$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
	$McTitle = $_POST['McTitle'];
	$McQuestion = $_POST['McQuestion'];
	$questionType = $_POST['questionType'];
	$questionset_id = $_POST['questionset_id'];
	$query = "insert into McQuestion (title, content, questionset_id) values ('$McTitle', '$McQuestion', '$questionset_id')";
	mysqli_query($db , $query ) ;
	mysqli_close($db);
	
	$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
	$McChoice1 = $_POST['McChoice1'];
	$McChoice2 = $_POST['McChoice2'];
	$McChoice3 = $_POST['McChoice3'];
	$McChoice4 = $_POST['McChoice4'];
	$McAnswer = $_POST['McAnswers'];
	$query = "insert into McChoices (McChoices1, McChoices2, McChoices3, McChoices4, McAnswer, McQuestionID) values 
	('$McChoice1' , '$McChoice2', '$McChoice3', '$McChoice4', '$McAnswer', 5)";
	mysqli_query($db , $query ) ;
	header( 'location: studentHome.html' ) ;
	mysqli_close($db);
?>