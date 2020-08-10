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

<form action="submitWork.php" method="POST">
<input type="number" name="studentID" placeholder="Enter your studentID"><br>
<?php 

$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$query = "select title from questionset where questionset_id = 2";
$results = mysqli_query($db, $query);
if(mysqli_num_rows($results) > 0) {
	while($row = mysqli_fetch_assoc($results)) {
		echo "<p style='color: white'>" . $row["title"] . "</p>" . "<br>";
	}
}else {
	echo "0 results";
}

mysqli_close($db);

$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$query = "select question.title, question.content from question, questionset where question.questionset_id = questionset.questionset_id";
$results = mysqli_query($db, $query);

if(mysqli_num_rows($results) > 0) {
	while($row = mysqli_fetch_assoc($results)) {
		echo "<p style='color: white'>" . $row["title"] . "<br>" . $row["content"] . "</p>" . "<br>" . "<input type='text' name='WAanswer' id='WAanswer'>" . "<br>" . "<br>";
	}
} else {
	echo "0 results<br>";
}
mysqli_close($db);

$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$query = "select title, content, McChoices1, McChoices2, McChoices3, McChoices4 from McQuestion, McChoices where McQuestion.McQuestionID = McChoices.McQuestionID";
$results = mysqli_query($db, $query);
if(mysqli_num_rows($results) > 0) {
	while($row = mysqli_fetch_assoc($results)) {
		echo "<p style='color: white'>" . $row["title"] . "<br>" . $row["content"] . "<br>" 
		. "<input type='radio' name='choice' id='choice' value='1619'>" . $row['McChoices1'] . "<br>" 
		. "<input type='radio' name='choice' id='choice' value='1776'>" . $row['McChoices2'] . "<br>" 
		. "<input type='radio' name='choice' id='choice' value='1550'>". $row['McChoices3'] . "<br>" 
		. "<input type='radio' name='choice' id='choice' value='1100'>". $row['McChoices4'] . "</p>" . "<br>";
	}
} else {
	echo "0 results check";
}
mysqli_close($db);
?>
<button type="submit" name="submitWork">Submit</button>
</form>
</body>
</html>