<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$regno=$_POST['regno'];
$name=$_POST['name'];

$gender=$_POST['gender'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
$password=$_POST['password'];
	$result ="SELECT count(*) FROM userRegistration WHERE email=? || regNo=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('ss',$email,$regno);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo"<script>alert('Registration number or email id already registered.');</script>";
}else{

try
{
	$query="insert into  userRegistration(regNo,name,gender,contactNo,email,password) values(?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssiss',$regno,$name,$gender,$contactno,$emailid,$password);
$stmt->execute();
echo"<script>alert('Student Succssfully register');</script>";

echo"<script>window.location.href = 'index.php';</script>";
}
catch(Exception $e)
{
	echo "<script>alert('Error! Duplicate Email detected.')</script>";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
    <title>Student Registration Form</title>
   <link rel="stylesheet" href="stylev2.css">
   <!-- <link rel="stylesheet" href="css/style.css"> -->
   <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
    <div class="body">
    <div class="navbar">
        <img src='logo.svg' class="logo">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">User Login</a></li>
           
        </ul>
    </div>
    <section> 

    
        <div class="form-box">
            <div class="form-value">
                <form action="" class="mt" method="post"> 
                
                <h2>Registration</h2>
					<div class="inputbox">
					<ion-icon name="briefcase-outline"></ion-icon> 

                        <input id="regno" type="text" placeholder="Registration No " name="" class="form-control " required="true" pattern="YKPT-\d{5}" title="YKPT-XXXXX">
                        <label for="" class="text-uppercase text-sm">Registration No </label>
                    </div>

					<div class="inputbox">
					<ion-icon name="people-outline"></ion-icon>
                        <input id="" type="text" placeholder="Name" name="fname" class="form-control " required="true">
                        <label for="" class="text-uppercase text-sm">Name</label>
                    </div>

					

					<div class="gender-selection">
                    <label for="" class="text-uppercase text-sm">Gender                     <ion-icon name="transgender-outline"></ion-icon>  
                    </label> 
  <label class="custom-radio">
    <input type="radio" name="gender" value="male" />
    <span class="checkmark"></span>
    Male
  </label>
  <label class="custom-radio">
    <input type="radio" name="gender" value="female" />
    <span class="checkmark"></span>
    Female
  </label>
</div>

                    

					<div class="inputbox">
					<ion-icon name="call-outline"></ion-icon>
                        <input id="" type="text" placeholder="Phone Number" name="" class="form-control mb" required="true" pattern="09[0-9]{7,9}" title="09XXXXXXXXX">
                        <label for="" class="text-uppercase text-sm">Phone Number </label>
                    </div>
					
					<div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="text" placeholder="Email" name="emailreg" class="form-control mb" required="true">
                        <label for="" class="text-uppercase text-sm">Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    <input id="pass" type="password" placeholder="Password" name="password" class="form-control mb" required="true"required> 
                    <!-- <input type="password" name="password" class="form-control mb" required="true" title="Enter your password"required> -->
                    <label for="" class="text-uppercase text-sm">Password</label>
                    </div>

					<div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    <input id="pass" type="password" placeholder="Confirm Password" name="password" class="form-control mb" required="true"required> 
                    <!-- <input type="password" name="password" class="form-control mb" required="true" title="Enter your password"required> -->
                    <label for="" class="text-uppercase text-sm">Confirm Password</label>
                    </div>
                    
                                   
                    <div class="forget">
                        <label for=""><input type="checkbox">Accept<a href=".php" class="text-light"> all informations</a></label>   
                    </div>
					
                    <button type="submit" name="login" value="login" >Register</button>
                    <div class="register">    </div>
                
                </form>
					
            </div>
</div>
    </section>

  

</div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>


<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>
	<script>
function checkRegnoAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'regno='+$("#regno").val(),
type: "POST",
success:function(data){
$("#user-reg-availability").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>


<script>
        function goToPage(page) {
            window.location.href = page;
        }

		<!-- Add this script inside the head section of your HTML -->

function valid() {
    // Other validation code...

    var password = document.registration.password.value;
    var confirmPassword = document.registration.cpassword.value;

    // Password should be at least 8 characters long
    if (password.length < 8) {
        alert("Password must be at least 8 characters long!");
        document.registration.password.focus();
        return false;
    }

    // Password should contain at least one lowercase letter
    var lowerCaseLetters = /[a-z]/g;
    if (!password.match(lowerCaseLetters)) {
        alert("Password must contain at least one lowercase letter!");
        document.registration.password.focus();
        return false;
    }

    // Password should contain at least one uppercase letter
    var upperCaseLetters = /[A-Z]/g;
    if (!password.match(upperCaseLetters)) {
        alert("Password must contain at least one uppercase letter!");
        document.registration.password.focus();
        return false;
    }

    // Password should contain at least one number
    var numbers = /[0-9]/g;
    if (!password.match(numbers)) {
        alert("Password must contain at least one number!");
        document.registration.password.focus();
        return false;
    }

    // Password should match the confirmed password
    if (password !== confirmPassword) {
        alert("Password and Confirm Password do not match!");
        document.registration.cpassword.focus();
        return false;
    }

    // Other validation code...
    return true;
}


    </script>




<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}

</script>

<style> 
	.btn-primary { 
		background: #009688; 
		transition: ease-in-out 0.5s; 
	}

	.btn-primary:hover {  
		background: #004d42 !important; /* Darker shade for hover effect */
		cursor: pointer; 
	}
</style>





</html>