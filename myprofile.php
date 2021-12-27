


<?php
session_start();
$id =$_SESSION["uid"];

$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="dbmsproject";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "failed to connect".mysqli_connect_error();
    exit;
}

$qry = "SELECT * FROM `registered` id='$id'";




$result  = mysqli_query($conn,$qry);

$data = mysqli_fetch_assoc($result);


?>

<?php

$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_name="dbmsproject";

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "failed to connect".mysqli_connect_error();
    exit;
}

if(isset($_POST["update"]))
{
    $pi= $_POST["photoid"];
    $pin= $_POST["photoidno"];
    $fn= $_POST["name"];
    $gn= $_POST["gender"];
    $dob= $_POST["yob"];
    $age= $_POST["age"];
    $vaccine=$_POST["vaccine"];
    $dose= $_POST["dose"];
    $center= $_POST["centre"];
	
	



	$qry2 ="UPDATE `registered` SET `id`=NULL,`photoid`='$pi',`photoidno`='$pin',
    `name`='$fn',`gender`='$gn',`yob`='$dob',`age`='$age',`vaccine`='$vaccine',`dose`='$dose',`centre`='$center'  WHERE id='$id'";

	$result2 = mysqli_query($conn,$qry2);

	if($result2)
	{
		?>
		<script>
			alert("data has been updated");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("data has not been updated");
		</script>
		<?php

	}







}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Registration 2nd page</title>
    <link rel="stylesheet" href="myprofile.css">
</head>

<body class="background1">
    <center>
        <h4 id="he">Winning over COVID</h4>
    </center>
    <div id="background">
        <!--<div id="img">
            <img src="vaccine1.jpeg" width="300" height="300">
        </div>-->
        <div class="wrapper">
            <div class="title">
                My Profile
            </div>


            <div class="form">

                <div class="inputfield">
                    <label>Full Name</label>
                    <input type="text" class="input" name="name" placeholder="Full Name" value="<?php echo $data['name']?>">
                </div>

                <div class="inputfield">
                    <label>Gender</label>
                    <div class="custom_select">
                        <!-- <select name="gender" value="<?php echo $data['gender']?>">
                            <option value="select">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select> -->
                        <input type="text" class="input" name="gender" placeholder="Gender" value="<?php echo $data['gender']?>">
                    </div>
                </div>

                <div class="inputfield">
                    <label>Year of Birth(YYYY)</label>
                    <input type="text" class="input" name="yob" maxlength="4" placeholder="Year of Birth(YYYY)" value="<?php echo $data['yob']?>">
                </div>

                <div class="inputfield">
                    <label>Age</label>
                    <input type="text" name="age" class="input" maxlength="3" placeholder="Age" value="<?php echo $data['age']?>">
                </div>


                <div class=>Vaccination Details:</div>
                <br>
                <div class="inputfield">
                    
                    <!-- <div class="custom_select">
                        <select name="vaccine" value=
                            <option value="select">Select</option>
                            <option value="covishield">COVISHIELD</option>
                            <option value="covaxin">COVAXIN</option>
                        </select>
                    </div> -->
                    <div class="inputfield">
                    <label>Vaccine Name</label>
                    <input type="text" name="vaccine" class="input" maxlength="3" placeholder="Vaccination center" value="<?php echo $data['vaccine']?>">
                </div>
                </div>

                <div class="inputfield">
                    <label>Dose</label>
                    <div class="custom_select">
                        <!-- <select name="dose" 
                            <option value="select">Select</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                        </select> -->
                        <input type="text" name="dose" class="input"  placeholder="Vaccindose" value="<?php echo $data['dose']?>">
                    </div>
                </div>

                <div class="inputfield">
                    <label>Vaccination Centre</label>
                    <div class="custom_select">
                        <!-- <select name="centre" 
                            <option value="select">Select</option>
                            <option value="amt">Amravati</option>
                            <option value="achal">Achalpur</option>
                            <option value="surji">Anjangaon Surji</option>
                            <option value="bhat">Bhatkuli</option>
                            <option value="cbazar">Chandur Bazar</option>
                            <option value="crly">Chandur Railway</option>
                            <option value="chikhal">Chikhaldara</option>
                            <option value="darya">Daryapur</option>
                            <option value="drly">Dhamangaon Railway</option>
                            <option value="dharni">Dharni</option>
                            <option value="morshi">Morshi</option>
                            <option value="nandgaon">Nandgaon-Khandeshwar</option>
                            <option value="teosa">Teosa</option>
                            <option value="warud">Warud</option>
                        </select> -->
                        <input type="text" name="centre" class="input" placeholder="Vaccination center" value="<?php echo $data['centre']?>">
                    </div>
                </div>


                <div>
                    <div id="inline" class="inputfield">
                        <input type="submit" name="edit" value="EDIT" class="btn">
                    </div>
                    <div id="inline" class="inputfield">
                        <!-- <input type="submit" name="update" value="UPDATE" class="btn"> -->
                        <button type="submit" name="update">update</button>
                    </div>
                </div>

            </div>
        </div>
        <div id="mybutton1">
            <a href="#">
                <button class="certificate">Get Certificate</button>
            </a>
        </div>
        <div id="mybutton2">
            <a href="#">
                <button class="vaccination">Get Vaccination Details</button>
            </a>
        </div>
        <div id="mybutton3">
            <a href="#">
                <button class="contact">Contact Us</button>
            </a>
        </div>
</body>

</html>