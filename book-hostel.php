<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


$aid = $_SESSION['id'];

$stmt = $mysqli->prepare("SELECT gender FROM userregistration WHERE id = ?");
$stmt->bind_param('i', $aid);
$stmt->execute();
$stmt->bind_result($genderfilter);
$stmt->fetch();

//echo "<h1>" . htmlspecialchars($genderfilter) . "</h1>";

$stmt->close();


//code for registration
if(isset($_POST['submit']))
{
    $roomno = $_POST['room'];
    $seater = $_POST['seater'];
    $stayfrom = $_POST['stayf'];
    $semester = $_POST['semester'];
    $regNo = $_POST['regno'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $contactno = $_POST['contact'];
    $emailid = $_POST['email'];
    $egyptcontactno = $_POST['econtact'];
    $guardianName = $_POST['gname'];
    $guardianRelation = $_POST['grelation'];
    $guardianContactno = $_POST['gcontact'];
    $corresAddress = $_POST['address'];
    $corresCity = $_POST['city'];
    $corresState = $_POST['state'];
    $pmntAddress = $_POST['paddress'];
    $pmntCity = $_POST['pcity'];
    $pmntState = $_POST['pstate'];
    $postingDate = $_POST['postingDate'];
    $updationDate = $_POST['updationDate'];
    $request = $_POST['submit'];

    $query = "INSERT INTO roomregistration (roomno, seater, stayfrom, semester, regNo, name, gender, contactno, emailid, egyptcontactno, guardianName, guardianRelation, guardianContactno, corresAddress, corresCity, corresState, pmntAddress, pmntCity, pmntState, postingDate, updationDate, request) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
 $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('iissssssssssssssss', $roomno, $seater, $stayfrom, $semester, $regNo, $name, $gender, $contactno, $emailid, $egyptcontactno, $guardianName, $guardianRelation, $guardianContactno, $corresAddress, $corresCity, $corresState, $pmntAddress, $pmntCity, $pmntState, $request);
        $stmt->execute();
        $stmt->close();

// Insert into userregistration
        $query1 = "INSERT INTO userregistration (regNo, Name, gender, contactNo, email, password) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt1 = $mysqli->prepare($query1);
        $stmt1->bind_param('sssiss', $regNo, $name, $gender, $contactno, $emailid, $contactno);
        $stmt1->execute();
        echo "<script>alert('Student Successfully registered');</script>";
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
	<title>Student Hostel Registration</title>
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
<script>
// function getSeater(val) {
// $.ajax({
// type: "POST",
// url: "get_seater.php",
// data:'roomid='+val,
// success: function(data){
// //alert(data);
// $('#seater').val(data);
// }
// });

// $.ajax({
// type: "POST",
// url: "get_seater.php",
// data:'rid='+val,
// success: function(data){
// //alert(data);
// $('#fpm').val(data);
// }
// });
// }



// $(document).ready(function () {
// $('#seater').change(function () {
// var selectedSeater = $(this).val();
// getRoom(selectedSeater);
// });

// function getRoom(val) {
// $.ajax({
// type: "POST",
// url: "get_seater.php",
// data: 'seater=' + val,
// success: function (data) {
//     console.log(data);
// $('#room').html(data);
// }
// });
// }
// });
    $(document).ready(function () {
    $('#seater').change(function () {
        var selectedSeater = $(this).val();
        var genderFilter = '<?php echo $genderfilter; ?>'; // Add this line to include the PHP variable
        getRoom(selectedSeater, genderFilter);
    });

    function getRoom(seater, gender) {
        $.ajax({
            type: "POST",
            url: "get_seater.php",
            data: {
                seater: seater,
                gender: gender  // Add gender to the data sent via POST
            },
            success: function (data) {
                //console.log(data);  // Debugging output
                $('#room').html(data);
            }
        });
    }
});


$(document).ready(function () {
$('#room').change(function () {
var selectedRoom = $(this).val();
getseat(selectedRoom);
});

function getseat(val) {
$.ajax({
type: "POST",
url: "get_seater.php",
data: 'room=' + val,
success: function (data) {
$('#seater').html(data);
}
});
$.ajax({
type: "POST",
url: "get_seater.php",
data:'rid='+val,
success: function(data){
//alert(data);
$('#fpm').val(data);
}
});
}
});

// function getSeater(val) {
// $.ajax({
// type: "POST",
// url: "get_seater.php",
// data:'rid='+val,
// success: function(data){
// //alert(data);
// $('#fpm').val(data);
// }
// });
// }
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



</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading" style="background:#009688">Fill all Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
							<?php
$uid=$_SESSION['login'];
							 $stmt=$mysqli->prepare("SELECT emailid FROM roomregistration WHERE emailid=? || regno=? ");
				$stmt->bind_param('ss',$uid,$uid);
				$stmt->execute();
				$stmt -> bind_result($email);
				$rs=$stmt->fetch();
				$stmt->close();
				if($rs)
				{ ?>
			<h3 style="color: red" align="center">Hostel already booked by you</h3>
			<div align="center">
				<div class="col-md-4">&nbsp;</div>
			<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 ">My Room</div>
													
												</div>
											</div>
											<a href="room-details.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
				<?php }
				else{
								
							?>			
<div class="form-group">
<label class="col-sm-4 control-label"><h4 style="color:white" align="left">Room Related info </h4> </label>


</div>




											
<div class="form-group">
<label class="col-sm-2 control-label">Seater</label>
<div class="col-sm-8">
<select name="seater" id="seater"class="form-control" required> 
<option value="">Select Seater</option>
<?php 
if($genderfilter==='male'){
    $query ="SELECT DISTINCT seater FROM alinkar";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
    ?>

<option value="<?php echo $row->seater;?>"> <?php echo $row->seater;?></option>
<option>this male test</option>

<?php }

}else if($genderfilter==='female'){
$query ="SELECT DISTINCT seater FROM mudra";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
    ?>
<option value="<?php echo $row->seater;?>"> <?php echo $row->seater;?></option>
<option>this female test</option>

<?php }} ?>

</select> 





</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room no. </label>
<div class="col-sm-8">
<select name="room" id="room"class="form-control" onBlur="checkAvailability()" required> 
<option value="">Select Room</option>
<?php $query ="SELECT * FROM alinkar WHERE available!=0 " ;
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option data-seater="<?php echo $row->seater;?>" value="<?php echo $row->room_no;?>"> <?php echo $row->room_no;?></option>
<?php } ?>
</select> 
<span id="room-availability-status" style="font-size:12px;"></span>

</div>
</div>





<div class="form-group">
<label class="col-sm-2 control-label">Hostel Fee</label>
<div class="col-sm-8">
<input type="text" name="fpm" id="fpm"  class="form-control" value="25000" readonly="true">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Food Fee Per Month</label>
<div class="col-sm-8">
<input type="text" name="" id=""  class="form-control" value="93000" readonly="true">
</div>
</div>

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Food Status</label>
<div class="col-sm-8">
<input type="radio" value="0" name="foodstatus"> Without Food
<input type="radio" value="1" name="foodstatus" checked="checked"> With Food(90,000 mmk Per Month Extra)
</div>
</div>	 -->

<div class="form-group">
<label class="col-sm-2 control-label">Stay From</label>
<div class="col-sm-8">
<input type="date" name="stayf" id="stayf"  class="form-control" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Duration</label>
<div class="col-sm-8">
<!-- <select name="duration" id="duration" class="form-control"> -->
<input type="text" name="duration" id="duration"  class="form-control" value="5" readonly >
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label"><h4 style="color: white" align="left">Personal info </h4> </label>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Semester: </label>
<div class="col-sm-8">
<select name="semester" id="semester" class="form-control" required> 
<option value="">Select Semester</option>
<option value="Semester 1">Semester 1 </option>
<option value="Semester 2">Semester 2 </option>
<option value="Semester 3">Semester 3 </option>
<option value="Semester 4">Semester 4 </option>
<option value="Semester 5">Semester 5 </option>
<option value="Semester 6">Semester 6 </option>
<option value="Semester 7">Semester 7 </option>
<option value="Semester 8">Semester 8 </option>
<option value="Semester 9">Semester 9 </option>
<option value="Semester 10">Semester 10 </option>
</select> </div>
</div>

<?php	
$aid=$_SESSION['id'];
	$ret="select * from userregistration where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$aid);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>

<div class="form-group">
<label class="col-sm-2 control-label">Registration No : </label>
<div class="col-sm-8">
<input type="text" name="regno" id="regno"  class="form-control" value="<?php echo $row->regNo;?>" readonly >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Name : </label>
<div class="col-sm-8">
<input type="text" name="name" id="name"  class="form-control" value="<?php echo $row->name;?>" readonly >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<input type="text" name="gender" value="<?php echo $row->gender;?>" class="form-control" readonly>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact" value="<?php echo $row->contactNo;?>"  class="form-control" readonly>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id : </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" value="<?php echo $row->email;?>"  readonly>
</div>
</div>
<?php } ?>
<div class="form-group">
<label class="col-sm-2 control-label">Emergency Contact: </label>
<div class="col-sm-8">
<input type="text" name="econtact" id="econtact"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian  Name : </label>
<div class="col-sm-8">
<input type="text" name="gname" id="gname"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian  Relation : </label>
<div class="col-sm-8">
<input type="text" name="grelation" id="grelation"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian Contact no : </label>
<div class="col-sm-8">
<input type="text" name="gcontact" id="gcontact"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-3 control-label"><h4 style="color: white" align="left">Correspondense Address </h4> </label>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<textarea  rows="5" name="address"  id="address" class="form-control" required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="city" id="city"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">State </label>
<div class="col-sm-8">
<select name="state" id="state"class="form-control" required> 
<option value="">Select State</option>
<?php $query ="SELECT * FROM states";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->State;?>"><?php echo $row->State;?></option>
<?php } ?>
</select> </div>
</div>							


<div class="form-group">
<label class="col-sm-3 control-label"><h4 style="color: white" align="left">Permanent Address </h4> </label>
</div>


<div class="form-group">
<label class="col-sm-5 control-label">Permanent Address same as Correspondense address : </label>
<div class="col-sm-4">
<input type="checkbox" name="adcheck" value="1"/>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<textarea  rows="5" name="paddress"  id="paddress" class="form-control" required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="pcity" id="pcity"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">State </label>
<div class="col-sm-8">
<select name="pstate" id="pstate"class="form-control" required> 
<option value="">Select State</option>
<?php $query ="SELECT * FROM states";
$stmt2 = $mysqli->prepare($query);
$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option value="<?php echo $row->State;?>"><?php echo $row->State;?></option>
<?php } ?>
</select> </div>
</div>							




<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit" style="align:center;">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary" style="align:center; background:#009688;">
</div>
</form>
<?php } ?>

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

<script>
    // JavaScript to filter room options based on selected seater
    // document.getElementById('seater').addEventListener('change', function () {
    //     var selectedSeater = this.value;
    //     var roomOptions = document.getElementById('room').options;

    //     for (var i = 0; i < roomOptions.length; i++) {
    //         var option = roomOptions[i];
    //         var optionSeater = option.getAttribute('data-seater');

    //         if (selectedSeater === '0' || selectedSeater === optionSeater) {
    //             option.style.display = '';
    //         } else {
    //             option.style.display = 'none';
    //         }
    //     }
    // });


 type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#paddress').val( $('#address').val() );
                $('#pcity').val( $('#city').val() );
                $('#pstate').val( $('#state').val() );
            } 
            
        });
    });
</script>
	<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'roomno='+$("#room").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>


<script type="text/javascript">

$(document).ready(function() {
	$('#duration').keyup(function(){
		var fetch_dbid = $(this).val();
		$.ajax({
		type:'POST',
		url :"ins-amt.php?action=userid",
		data :{userinfo:fetch_dbid},
		success:function(data){
	    $('.result').val(data);
		}
		});
		

})});


</script>



</html>