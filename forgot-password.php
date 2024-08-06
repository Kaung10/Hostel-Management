<?php
session_start();
include('includes/config.php');

if(isset($_POST['verify']))
{
	$input_email = $_POST['email'];
	
	$stmt  =  $mysqli -> prepare("SELECT email FROM userregistration WHERE (email=?)");
	$stmt -> bind_param('s',$input_email);
	$stmt -> execute();
	$stmt -> bind_result($email);
	
	$rs = $stmt -> fetch();
	if($rs == false) {
        $_SESSION['error_msg'] = "Error! \"$input_email\" doesn't exist in database :(";
    } else {
        $_SESSION['success_msg'] = "Password reset link has been successfully sent to \"$email\"";
    }

    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>User Forgot Password</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">

	<style>
		#error_msg{
			color: red;
			font-size: 0.9em;
		}
		#green_msg{
			color: green;
			font-size: 0.9em;
		}
	</style>

</head>
<body>
	
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Forgot Password</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">

							<form action="" class="mt" method="post">
								<label for="email" class="text-uppercase text-sm">Your Email</label>
									<input type="email" id="email" placeholder="Email" name="email" title="Enter the email you are trying to recover" class="form-control mb" required>
								
									<?php 
										if(isset($_SESSION['error_msg'])) {
											echo "<p id='error_msg'>" . $_SESSION['error_msg'] . "</p>";
											unset($_SESSION['error_msg']);
										}
										elseif(isset($_SESSION['success_msg'])) {
											echo "<p id='green_msg'>" . $_SESSION['success_msg'] . "</p>";
											echo "<script> alert('Verification link has been successfully sent') </script>";
											unset($_SESSION['success_msg']);
										}
									?>

								<input type="submit" name="verify" class="btn btn-primary btn-block" value="Verify" >
							</form>

							</div>
						</div>
						<div class="text-center text-light">
							<a href="index.php" class="text-light">Sign in?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
</html>
