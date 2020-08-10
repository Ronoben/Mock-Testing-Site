<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<nav id="navbar">
	<ul>
		<li class="dropdown">
			<a href="teacherHome.html" class="dropbtn">Home</a>
		</li>
		<li class="dropdown">
			<a href="teacherProblemSet.php" class="dropbtn">Create a Problem Set</a>
		</li>
		<li class="dropdown">
			<a href="teacherCreateQuestion.php" class="dropbtn">Create a Question</a>
		</li>
		<li class="dropdown">
			<a href="studentGrades.php" class="dropbtn">Check Students Grades</a>
		</li>
		<li class="dropBar">
			<a href="logout.php" class="dropItem" style="float: right; color: white;">Log out</a>
		</li>
	</ul>
</nav>
</body>
</html>
<?php
	$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
	$query = "select student_id, grade, title from student_grades, questionset where student_grades.questionset_id = questionset.questionset_id";
	$results = mysqli_query($db , $query ) ;
	if(mysqli_num_rows($results) > 0) {
		while($rows = mysqli_fetch_assoc($results)) {
			echo "<p style='color: white'>" . "Student ID: " . $rows['student_id'] . " | " . "Question Set: " . $rows['title'] . " | " . "Grade: " . $rows['grade'] . "</p>" . "<br>";
		}
	}else {
		echo " 0 results";
	}
	mysqli_close($db);
?>