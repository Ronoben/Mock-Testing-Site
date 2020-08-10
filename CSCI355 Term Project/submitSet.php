<?php

$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$setName = $_POST['setName'];
		$query = "Insert into questionset (title) values ('$setName')";
		mysqli_query($db , $query );
		mysqli_close($db);
?>
	