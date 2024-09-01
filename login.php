<?php
session_start();
include('includes/config.php');

try{
	if(isset($_POST['login']))
	{
		$input_email_or_reg = $_POST['emailreg'];
		$input_password = $_POST['password'];
		$stmt = $mysqli -> prepare("SELECT email,password,id FROM userregistration WHERE (email=? || regNo=?) and password=? ");
					
		$stmt->bind_param('sss',$input_email_or_reg, $input_email_or_reg, $input_password);
		$stmt->execute();
		$stmt -> bind_result($email,$password,$id);
		$rs = $stmt->fetch();
		$stmt->close();

		$_SESSION['id'] = $id;							
		$_SESSION['login'] = $email;					

		$ldate=date('d/m/Y h:i:s', time());				

		if($rs)
		{
			// $id = $_SESSION['id'];
			$uid = $_SESSION['id'];
			$uemail = $_SESSION['login'];


			// $geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
			// $addrDetailsArr = unserialize(file_get_contents($geopluginURL));

			$log = "insert into userlog(userId,userEmail,loginTime) values('$uid','$uemail','$ldate')";

			$mysqli -> query($log);

			header("location:dashboard.php");
			exit();
		}
		else
		{
			$stmt = $mysqli -> prepare("SELECT username,email,password,id FROM admin WHERE (email=? || username=?) and password=? ");
			$stmt -> bind_param('sss',$input_email_or_reg, $input_email_or_reg, $input_password);
			$stmt -> execute();
			$stmt -> bind_result($username,$email,$password,$id);
			$rs = $stmt -> fetch();

			$_SESSION['id'] = $id;
			$ldate = date('d/m/Y h:i:s', time());

			if($rs)
			{
				echo "<script>
						alert('You are now in admin mode'); 
						window.location.href = 'admin/dashboard.php';
					</script>";
				exit();
			}
			else
			{
				echo "<script>alert('Invalid Email/RegNum or password');</script>";
			}	
		}
	}
}
catch (Exception $e)
{
	echo "Error! Something went wrong." . $e->getMessage();
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
    <title>Student Registration</title>
   <link rel="stylesheet" href="stylehsan.css">
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
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
            <li><a href="https://ucsy.edu.mm/">ACADEMIC</a></li>
            <li><a href="https://ucsy.edu.mm/page291.do">COLLABORATION</a></li>
<<<<<<< HEAD
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#"> <ion-icon name="call-outline"> </ion-icon> (+95) 9 443440479</a></li>
=======
            <li><a href="aboutus.html">ABOUT US</a></li>
            <!-- <li><a href="#"> <ion-icon name="call-outline"> </ion-icon> (+95) 9 443440479</a></li> -->
>>>>>>> branch1
           
        </ul>
    </div>
    <section> 
        
        <div class="form-box">
            <div class="form-value">
                <form action="" class="mt" method="post"> 
                    <h2>Login</h2>
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
                    
                                   
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me<a href="forgot-password.php" class="text-light">Forgot password?</a></label>
                        
                        
                    </div>
                    <button type="submit" name="login" value="login" >Log in</button>
                    <div class="register"> 
                        <p>Don't have an account. <a href="registration.php">Register</a> </p>
                    </div>
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
	<script src= "click.js"></script>
</body>
</html>