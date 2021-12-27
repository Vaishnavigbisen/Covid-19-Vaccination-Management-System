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

$qry = "SELECT * FROM `registered`  ";




$result  = mysqli_query($conn,$qry);

$data = mysqli_fetch_assoc($result);

// $data = mysqli_fetch_assoc($result);


?>


<?php

if(isset($_POST["update"]))
{
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

$pi= $_POST["photoid"];
$pin= $_POST["photoidno"];
$fn= $_POST["name"];
$gn= $_POST["gender"];
$dob= $_POST["yob"];
$age= $_POST["age"];
$vaccine=$_POST["vaccine"];
$dose= $_POST["dose"];
$center= $_POST["centre"];
	

	$id =$_SESSION["uid"];
	
	



	
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
<?php



if(isset($_POST["vc"]))
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
	

	$id =$_SESSION["uid"];
	
	



	
	$qry2 ="UPDATE `registered` SET `id`=NULL,`photoid`='$pi',`photoidno`='$pin',
    `name`='$fn',`gender`='$gn',`yob`='$dob',`age`='$age',`vaccine`='$vaccine',`dose`='$dose',`centre`='$center'  WHERE id='$id'";
require_once __DIR__ . '/vendor/autoload.php';
	
$html='';

$html.='<img style="width:200px; height:200px;margin-left:230px;" src="pdf.jpg">';
// $html.='<center id="head" style="text-align:center" >Ministry of Health & Family Welfare</center> ';
// $html.='<center id="head" style="text-align:center" >Government Of India</center> ';
$html.='<center id="head" style="text-align:center; color:blue;font-weight:bold;font-size:25px">Certificate For COVID-19 Vaccination</center> ';
$html.='<center id="head" style="text-align:center;color:blue" >Issued in India by Ministry of Health & Family Welfare,Govt. of India</center> ';
$html.='<center id="head" style="text-align:center" ></center> ';
$html.='<center id="head" style="text-align:center" >Certificate ID  70888221060 </center> ';
$html.='<br> '.'  </br>';

$html.='<center style="color:blue;text-decoration:underline;font-size:20px;" >Beneficiary Details </center> ';
$html.='<br> '.'  </br>';

$html.='<center><p>Beneficiary  Name : '.$fn.'</p></center>'; 
$html.='<p>Gender : '.$gn.'</p>';    
$html.='<p>Vaccination Status  : '.$dose.'  dose</p>';
$html.='<br> '.'  </br>'; 
$html.='<center style="color:blue;text-decoration:underline;font-size:20px;" >Vaccination Details </center> ';
$html.='<p>Vaccine Name  : '      .$vaccine.'  </p>'; 
$html.='<p>Dose Number  : '.$dose.' /2 </p>'; 
$html.='<p>Vaccination AT : '.$center.'  </p>'; 
$html.='<br> '.'  </br>';
$html.='<p style="text-align:center;font-size:25px;color:red;">Thank You..!! <br> STAY HOME || STAY SAFE'.' </p>'; 
$html.='<hr> '.'  </hr>';




$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
}


?>




<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<title></title>
    <style>
        #header{
        background: #555555;
        color: white;
        padding:20px;
        text-align:center;

    }
	body
	{
		background-image: url(Registration-Form/BACK2.jpg);
	}
	form{
		background-color:white;
		padding:30px;
	}
	#form{
		border:2px solid white;
		background-color:white;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
	}
	
    </style>
</head>
<body>
<div class="row" id="header">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <h3 style="color:yellow">My profile</h3>
            
        </div>
        <div class="col-md-4">
            
        </div>
    </div><br><br>
<div class="container">
	<div class="row">
	<div class="col-md-4"> </div>
	<div class="col-md-4" id="form"> 
<!-- fullname, dob, contact, email, password, address, gender -->
		<h3>  </h3>
		<form method="post" >
		<div class="form-group" id="edit">
				First name- <input type="text" name="name" class="form-control" value="<?php echo $data['name']?>">
			</div>
            <div class="form-group">
				gender- <input type="text" name="gender" class="form-control" value="<?php echo $data['gender']?>">
			</div>
			

			
            
            
            <div class="form-group">
				Age - <input type="text" name="age" class="form-control" value="<?php echo $data['age']?>" >
			</div>
			<div class="form-group">
				YOB - <input type="text" name="yob" class="form-control" value="<?php echo $data['yob']?>" >
			</div>
			
            <!-- <div class="form-group">
				current Password - <input type="password" name="pass1" class="form-control">
			</div> -->
			<div class="form-group">
			vaccine name - <input id="pass2" type="text" name="vaccine" class="form-control" value="<?php echo $data['vaccine']?>">
			</div>
			<div class="form-group">
			vaccine dose - <input id="pass2" type="text" name="dose" class="form-control" value="<?php echo $data['dose']?>">
			</div>
			<div class="form-group">
			Vaccination Center - <input id="pass2" type="text" name="centre" class="form-control" value="<?php echo $data['centre']?>">
			</div>
            <!-- <div class="form-group">
				Confirm Password - <input id="pass3" type="password" name="pass3" class="form-control">
			</div> -->
			
			
			

			
			
			
			<div class="form-group">
				<input type="submit" value="Update" name="update" class="btn btn-success form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="View Certificate" name="vc" class="btn btn-primary form-control">
			</div>
			<!-- <a href="index.php" >Update </a> -->




		</form>

	</div>
	<div class="col-md-4"> </div>
</div>

</body>
</html>