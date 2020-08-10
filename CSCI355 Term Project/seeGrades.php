<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<nav id="navbar">
	<ul>
		<li class="dropdown">
			<a href="studentHome.html" class="dropbtn">Home</a>
		</li>
		<li class="dropdown">
			<a href="completeProblem.php" class="dropbtn">Complete an Assignment</a>
		</li>
		<li class="dropdown">
			<a href="myGrades.php" class="dropbtn">Check your Grades</a>
		</li>
		<li class="dropBar">
			<a href="logout.php" class="dropItem" style="float: right; color: white;">Log out</a>
		</li>
	</ul>
</nav>
<?php
$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$student_id = $_POST['student_id'];
$query = "select grade from student_grades where student_id ='$student_id'";
$results = mysqli_query($db, $query);
if(mysqli_num_rows($results) > 0) {
	while($row = mysqli_fetch_assoc($results)) {
		echo "<p style='color: white'>" . "Grade: " . $row['grade'] . "</p>" . "<br>";
	}
}else {
	echo "0 results";
}
mysqli_close($db);
?>