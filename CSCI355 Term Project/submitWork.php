<?php
//insert word answer
$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$student_id = $_POST['studentID'];
$answer = $_POST['WAanswer'];
$query = "insert into student_answers(student_id, questionset_id, question_id, answer) values ('$student_id', 2, 1, '$answer')";
mysqli_query($db, $query);
mysqli_close($db);

// insert multiple choice answer
$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$student_id = $_POST['studentID'];
$MCanswer = $_POST['choice'];
$query = "insert into student_answers(student_id, questionset_id, question_id, answer) values ('$student_id', 2, 1, '$MCanswer')";
mysqli_query($db, $query);
mysqli_close($db);

//grade assignment
$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$student_id = $_POST['studentID'];
$answer = $_POST['WAanswer'];
$MCanswer = $_POST['choice'];
$check_answer_query = "select answer, McAnswer from question,McChoices,McQuestion where McChoices.McQuestionID = McQuestion.McQuestionID";
$check_student_answer_query = "select answer from student_answers where student_id = '$student_id'";
$results = mysqli_query($db, $check_answer_query);
$check_answer = mysqli_fetch_assoc($results);
if($check_answer) {
	if($check_answer['answer'] === $answer && $check_answer['McAnswer'] === $MCanswer) {
		$grade = "100";
	}else if ($check_answer['answer'] === $answer && $check_answer['McAnswer'] !== $MCanswer) {
		$grade = "66";
	} else if ($check_answer['answer'] !== $answer && $check_answer['McAnswer'] === $MCanswer) {
		$grade = "33";
	} else {
		$grade = "0";
	}
}
//insert grades
$query = "insert into student_grades(student_id, grade, questionset_id) values ('$student_id', '$grade', 2)";
mysqli_query($db, $query);
header( 'location: studentHome.html' ) ;
mysqli_close($db);
?>