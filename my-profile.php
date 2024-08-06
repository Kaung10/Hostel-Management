<?php
session_start();
include('includes/config.php');
date_default_timezone_set('Asia/Yangon');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];
if(isset($_POST['update']))
{

$name = $_POST['fname'];
$gender = $_POST['gender'];
$contactno = $_POST['contact'];
$email = $_POST['email']; 
$regno = $_POST['regno'];
$udate = date('d-m-Y h:i:s', time());

$query = "UPDATE userRegistration SET name=?, gender=?, contactNo=?, email=?, regNo=?, updationDate=? WHERE id=?";
$stmt = $mysqli->prepare($query);
$rc = $stmt->bind_param('ssisssi', $name, $gender, $contactno, $email, $regno, $udate, $aid);
$stmt->execute();
echo "<script>alert('Profile updated Successfully');</script>";

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
	<meta name="theme-color" content="#3e454c">
	<title>Profile Updation</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>


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
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
	<?php	
$aid=$_SESSION['id'];
$udate = date('d-m-Y h:i:s', time());
	$ret="select * from userregistration where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$aid);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>	
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title"><?php echo $row->name;?>'s&nbsp;Profile </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading" style="background:#009688">

Last Updation date : &nbsp; <?php echo $row->updationDate;?> 
</div>
									

<div class="panel-body" >
<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();" >
								
								

<div class="form-group">
    <label class="col-sm-2 control-label">Registration No : </label>
    <div class="col-sm-8">
        <input type="text" name="regno" id="regno" class="form-control" required="required" value="<?php echo $row->regNo; ?>" readonly>
    </div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label"> Name : </label>
<div class="col-sm-8">
<input type="text" name="fname" id="fname"  class="form-control" value="<?php echo $row->name;?>"   required="required" >
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<select name="gender" class="form-control" required="required">
<option value="<?php echo $row->gender;?>"><?php echo $row->gender;?></option>
<?php
if ($row->gender != 'Male' && $row->gender!='male'){
		echo "<option value='Male'>Male</option>";
        	}
		else{
        echo "<option value='Female'>Female</option>";
            }
?>
<!-- <option value="male">Male</option>
<option value="female">Female</option> -->


</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" maxlength="10" value="<?php echo $row->contactNo;?>" required="required">
</div>
</div>


<div class="form-group">
        <label class="col-sm-2 control-label">Email id: </label>
        <div class="col-sm-8">
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $row->email; ?>" required>
            <span id="user-availability-status" style="font-size:12px;"></span>
        </div>
    </div>

    

    

<?php } ?>

						



<div class="col-sm-6 col-sm-offset-4">

<input type="submit" name="update" Value="Update Profile" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
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


<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
               // $('#paddress').val( $('#address').val() );
               // $('#pcity').val( $('#city').val() );
              //  $('#pstate').val( $('#state').val() );
              //  $('#ppincode').val( $('#pincode').val() );
            } 
            
        });
    });
</script>
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
error:function (){}
});
}
</script>

</html>