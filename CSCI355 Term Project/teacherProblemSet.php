<!Doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<style>
		#set {
			margin-left: 600px;
			margin-top: 275px;
		}
	</style>
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
	<div id="set">
		<form action="submitSet.php" method="POST">
			<input type="text" id="setName" name="setName" placeholder="Name the problem set">
			<button type="submit" id="submitSet" name="submitSet" class="ibtn">Submit</button>
		</form>
	</div>
</body>
</html>