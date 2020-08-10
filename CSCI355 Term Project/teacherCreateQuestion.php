<!Doctype html>
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
			<a href="teacherQuestions.php" class="dropbtn">Create a Question</a>
		</li>
		<li class="dropdown">
			<a href="studentGrades.php" class="dropbtn">Check Students Grades</a>
		</li>
		<li class="dropBar">
			<a href="logout.php" class="dropItem" style="float: right; color: white;">Log out</a>
		</li>
	</ul>
</nav>
	<form action="submitWord.php" method="POST">
		<label for="wordQuestion" style="color: white">Question:</label></br>
		<input type="text" name="questionset_id" id="questionset_id" placeholder="Enter set ID">
		<input type="text" name="wordTitle" id="wordTitle" placeholder="Title the question">
		<input type="text" name="wordQuestion" id="wordQuestion" placeholder="Enter the question">
		<input type="text" name="wordAnswer" id="wordAnswer" placeholder="Enter the answer">
		<select name="questionType" id="questionType">
			<option value="WA">Word Answer</option>
		</select>
		<button type="submit" id="submitWord" name="submitWord" class="ibtn">Submit</button>
	</form>
	<form action="submitMC.php" method="POST">
		<label for="McQuestion" style="color: white">Question:</label></br>
		<input type="text" name="questionset_id" id="questionset_id" placeholder="Enter question set ID">
		<input type="text" name="McQuestion_id" id="McQuestion_id" placeholder="Enter question ID">
		<input type="text" name="McTitle" id="McTitle" placeholder="Title the question"><br>
		<input type="text" name="McQuestion" id="McQuestion" placeholder="Enter the question"><br>
		<input type="text" name="McChoice1" id="McChoice1" placeholder="Enter the first choice"><br>
		<input type="text" name="McChoice2" id="McChoice2" placeholder="Enter the second choice"><br>
		<input type="text" name="McChoice3" id="McChoice3" placeholder="Enter the third choice"><br>
		<input type="text" name="McChoice4" id="McChoice4" placeholder="Enter the fourth choice"><br>
		<input type="text" name="McAnswers" id="McAnswers" placeholder="Enter the answer">
		<select name="questionType" id="questionType">
			<option value="MC">Multiple Choice</option>
		</select>
		<button type="submit" name="submitMC" id="submitMC">Submit</button>
	</form>
</body>
</html>
	
		
		