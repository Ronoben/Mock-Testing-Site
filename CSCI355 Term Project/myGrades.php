<!Doctype html>
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
<form action="seeGrades.php" method="POST">
	<input type="text" name="student_id" id="student_id" placeholder="Enter your student ID">
	<button type="submit" name="submitID" id="submitID">Submit</button>
</form>
</body>
</html>

