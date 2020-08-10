<?php

//Login users
$db = mysqli_connect('mars.cs.qc.cuny.edu' , 'sijo6231' , '23666231' , 'sijo6231') or die("could not connect to database" ) ;
$email = $_POST['email'] ;
$password = $_POST['password']  ;
$accType = $_POST['acc_type'];

if(isset($_POST['login']) )
 {
    $errors = array() ;

    if( empty($email))
    {
        array_push($errors , "Email is required" ) ;
    }
    if( empty($password))
    {
        array_push($errors , "Password is required" ) ;
    }
    if( count($errors) == 0 )
    {
        $password = ($password) ;
        $query = "Select * from appuser where email = '$email' AND pwd = '$password' " ;
        $results = mysqli_query($db , $query) ;
        if( mysqli_num_rows($results) ) 
        {
            $_SESSION['email'] = $email ;
            $_SESSION['success'] = "Logged in Successfully" ;

            echo "You are now logged in. Thank you :)" ;
			if($query2 = "select user_type from appuser where email = '$email' AND pwd = '$password'") {
				header("location:teacherHome.html");
			}else {
				header("location:studentHome.html");
			}
        }
        else
        {
            array_push($errors , "Wrong email/Password combination. Please try again." ) ;
        }
    }
mysqli_close($db);
 }

 else

 {
session_start() ;


$errors = array() ;

//register users

$fname = $_POST['fname'] ;
$lname = $_POST['lname'] ;
$confirmpassword = $_POST['confirmpassword'] ;
$first_letter_fname =substr($fname, 0, 1);
$username = $first_letter_fname + $lname;

//form validation

if( empty($fname) )
{
    array_push( $errors , "First name is required") ;
} 

if( empty($lname) )
{
	array_push( $errors , "Last name is required") ;
}

if( empty($email) )
{
    array_push($errors , "email is required") ;
} 

if( empty($password))
{
    array_push($errors , "Password is required") ;
} 

if( $password != $confirmpassword )
{
    array_push($errors , "Password do not match" ) ;
}

//check database for existing user with same username
$user_check_query = "Select * from appuser where email = '$email' LIMIT 1" ;

$results = mysqli_query( $db , $user_check_query ) ;
$user = mysqli_fetch_assoc($results) ;


if($user)
{
    if($user["email"] === $email)
    {
        array_push($errors , "This email is already registered" ) ;
    }
}

//Register user if no errors
if( count($errors) == 0 )
{
	
    $password = ($password) ; //This will encrypt password

    $query = "Insert into appuser (login, first_name, last_name , email , pwd, user_type ) values ('$username', '$fname', '$lname' , '$email' , '$password', '$accType' )" ;
    
    mysqli_query($db , $query ) ;

    $_SESSION['first_name'] = $fname ;
	$_SESSION['last_name'] = $lname ;
    $_SESSION['success'] = "You are now signed Up" ;
	echo "check";
    header( 'location: index.html' ) ;
    mysqli_close($db);
}

 echo "check";

}
echo "check";

?>
<?php if (is_countable($errors) && count($errors) > 0) : ?>
    <div>
    <?php foreach($errors as $error) : ?>
    <p><?php echo $error ?></p>
    <?php endforeach ?>
    <!--redirect to index.php after 2 seconds-->
    <?php header("Refresh:2; url= index.html"); ?>
    </div>
    
    <?php endif ?>