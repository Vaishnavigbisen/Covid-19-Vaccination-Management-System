<?php
session_start();
if(isset($_SESSION["uid"]))
{
	header("location:../../covid-19-vaccination.php");
}



?>


<?php
include("dbconnect.php");
if(isset($_POST["signup"]))
{

    $fn= $_POST["fullname"];
	
	$eid=$_POST["email"];
	$pwd= $_POST["password"];
   
	

	

    $qry="INSERT INTO `registration` (`id`, `fullname`, `email`, `password`)
     VALUES (NULL,'$fn','$eid','$pwd')";

	$result=mysqli_query($conn,$qry);

	


	if($result)
	{
		
	?>
<script>
    alert("Registration succesfull");
</script>
<?php
	}
	else
	{
        ?>
<script>
    alert("something went wrong");
</script>
<?php
	}
    
	
}
?>
<?php
// session_start();
if(isset($_SESSION["uid"]))
{
	header("location:index.php");
}



?>

<?php

if(isset($_POST["login"]))
{
include("dbconnect.php");

$eid=$_POST["email"];
$pwd=$_POST["password"];


$qry="SELECT * FROM `registration` WHERE email = '$eid' AND password = '$pwd'";

$result  = mysqli_query($conn,$qry);

$row = mysqli_num_rows($result);

if($row>0)
{
	$data=mysqli_fetch_assoc($result);

	// session_start();
	$_SESSION["uid"] =$data["id"];

	header("location:../../covid-19-vaccination-home.php");
  
}
else
{
	?>
<script>
    alert("invalid user name or password");
</script>
<?php
	
}




}
?>

































<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form" method="post">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <!-- <a href="../../covid-19-vaccination-home.php"> -->
                        <input type="submit" value="Login" class="btn solid" name="login"/>
                    <!-- </a> -->

                </form>
                <form action="#" class="sign-up-form" method="post">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="fullname" />
                    </div>
                    <div class=" input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                   
                    <!-- <a href="../../covid-19-vaccination-home.php"> -->
                        <input type="submit" class="btn" value="Sign up" name="signup" />
                    <!-- </a> -->
                </form>

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <br>
                    <button class="btn transparent" id="sign-up-btn" name="signup">
                        Sign up
                    </button>
                </div>
                <img src="img/medical_care.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <br>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/social_distancing.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>