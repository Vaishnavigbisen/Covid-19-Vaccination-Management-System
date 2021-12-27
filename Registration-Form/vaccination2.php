

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
if(isset($_POST["register"]))
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

    // $name=$_POST["name"];
    // $roll=$_POST["roll"];
    // $ad=$_POST["address"];
    // $section=$_POST["section"];


	

    $qry="INSERT INTO `registered`(`id`, `photoid`, `photoidno`, `name`, `gender`, `yob`, `age`, `vaccine`, `dose`, `centre`)
     VALUES (NULL,'$pi','$pin','$fn','$gn','$dob','$age','$vaccine','$dose','$center')";

    // $qry="INSERT INTO `extra`(`id`, `name`, `roll`, `address`, `section`)
    //  VALUES (NULL,'$name','$roll','$ad','$section')";
    
	$result=mysqli_query($conn,$qry);

    if($result)
    {
        ?>
        <script>
            alert("Registration Successfull ..!!");
        </script>

        <?php
    }
    else
    {
        ?>
        <script>
            alert("Something Went Wrong");
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
    <link rel="stylesheet" href="cssvaccination2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
			</script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
			</script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
			</script>
			<link href="style.css" rel="stylesheet">
			<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <style>
        #form {
            color: white;
            text-decoration: none;
        }
       
    </style>
</head>

<body class="background">
    <center>
        <h4 id="he">Winning over COVID</h4>
    </center>
    <div id="background">
        <!--<div id="img">
            <img src="vaccine1.jpeg" width="300" height="300">
        </div>-->
        <div class="wrapper">
            <div class="title">
                REGISTER FOR VACCINATION
            </div>
            <div class="note">
                User can register maximum 4 beneficiaries.
            </div>
            <form action=" " method="post">

            <div class="form" method="post" >
                <div class="inputfield">
                    <label>Photo ID Card Type, that you will bring to Vaccination Center</label>
                    <div class="custom_select">
                        <select name="photoid">
                            <option value="select">Select</option>
                            <option value="aadharcard">Aadhar Card</option>
                            <option value="drivinglicense">Driving License</option>
                            <option value="pancard">PAN Card</option>
                            <option value="passport">Passport</option>
                            <option value="voterid">Voter ID</option>
                            <option value="rationcard">Ration card with Photo</option>
                        </select>
                    </div>
                </div>

                <div class="inputfield">
                    <label>Photo Id Number</label>
                    <input type="text" class="input" name="photoidno" placeholder="Photo Id Number">
                </div>

                <div class="inputfield">
                    <label>Beneficiary Name as per photo ID Card</label>
                    <input type="text" class="input" name="name" placeholder="Beneficiary Name as per photo ID Card">
                </div>

                <div class="inputfield">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select name="gender">
                            <option value="select">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="inputfield">
                    <label>Year of Birth(YYYY)</label>
                    <input type="text" class="input" name="yob" maxlength="4" placeholder="Year of Birth(YYYY)">
                </div>

                <div class="inputfield">
                    <label>Age</label>
                    <input type="text" name="age" class="input" maxlength="3" placeholder="Age">
                </div>


                <div class=>Vaccination Details:</div>
                <div class="inputfield">
                    <label>Vaccine Name</label>
                    <div class="custom_select">
                        <select name="vaccine">
                            <option value="select">Select</option>
                            <option value="covishield">COVISHIELD</option>
                            <option value="covaxin">COVAXIN</option>
                        </select>
                    </div>
                </div>

                <div class="inputfield">
                    <label>Dose</label>
                    <div class="custom_select">
                        <select name="dose">
                            <option value="select">Select</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                        </select>
                    </div>
                </div>

                <div class="inputfield">
                    <label>Vaccination Centre</label>
                    <div class="custom_select">
                        <select name="centre">
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
                        </select>
                    </div>
                </div>

                <br>


                <div>
                    <div id="inline" class="inputfield">
                        <!-- <input href="covid-19-vaccination-home.php" type="submit" name="goback" value="GO BACK"
                            class="btn">  -->
                        
                      <button class="btn text-light"><a id="form" href=" ../covid-19-vaccination-home.php">Go
                                Back</a></button>
                    </div>
                     <div id="inline" class="inputfield">
                        <input type="submit" name="register" value="REGISTER"  class="btn">
                        <!-- <button class="btn text-light btn-danger" name="register"><a id="form" >Register
                                </a></button> -->
                </div>
                    </div>
                    <!-- <button class="btn text-light btn-danger" name="register"><a id="form" >Register
                                </a></button>
                </div> -->

            </div>
            </form> 
    </div>


          
    </div>
    <br><br><br>
  <div id="foot">

        <center>
            <h4 id="he">औषध सुध्दा आणि शिस्त सुध्दा<br>
                Together, India will defeat COVID-19</h4>
        </center> </div>
</body>

</html>