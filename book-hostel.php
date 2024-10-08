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

    // Collecting POST data
    $roomno = $_POST['room'];
    $seater = $_POST['seater'];
    $stayfrom = $_POST['stayf'];
    $semester = $_POST['semester'];
    $regNo = $_POST['regno'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $contactno = $_POST['contact'];
    $emailid = $_POST['email'];
    $egycontactno = $_POST['econtact'];
    $guardianName = $_POST['gname'];
    $guardianRelation = $_POST['grelation'];
    $guardianContactno = $_POST['gcontact'];
    $corresAddress = $_POST['address'];
    $corresCity = $_POST['city'];
    $corresState = $_POST['state'];
    $pmntAddress = $_POST['paddress'];
    $pmntCity = $_POST['pcity'];
    $pmntState = $_POST['pstate'];
    $request = 2;
    $postingDate = date('Y-m-d'); // Assuming you want today's date
    $updationDate = $postingDate; // or another date as needed

    // Prepare and execute SQL query for roomregistration
    $query = "INSERT INTO roomregistration (roomno, seater, stayfrom, semester, regNo, name, gender, contactno, emailid, egycontactno, guardianName, guardianRelation, guardianContactno, corresAddress, corresCity, corresState, pmntAddress, pmntCity, pmntState, postingDate, updationDate, request) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('iissssssssssssssssssii', $roomno, $seater, $stayfrom, $semester, $regNo, $name, $gender, $contactno, $emailid, $egycontactno, $guardianName, $guardianRelation, $guardianContactno, $corresAddress, $corresCity, $corresState, $pmntAddress, $pmntCity, $pmntState, $postingDate, $updationDate, $request);
    $stmt->execute();
    $stmt->close();

    if ($gender == 'male') {
        // Update available seats in the alinkar table
        $updateQuery = "UPDATE alinkar SET available = available - 1 WHERE room_no = ?";
        $updateStmt = $mysqli->prepare($updateQuery);
        $updateStmt->bind_param('i', $roomno);
        $updateStmt->execute();
        $updateStmt->close();
    }

     else if ($gender == 'female') {
        // Update available seats in the alinkar table
        $updateQuery = "UPDATE mudra SET available = available - 1 WHERE room_no = ?";
        $updateStmt = $mysqli->prepare($updateQuery);
        $updateStmt->bind_param('i', $roomno);
        $updateStmt->execute();
        $updateStmt->close();
    }
    // Provide feedback to the user
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">

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
                console.log(data);  // Debugging output
                $('#room').html(data);
            }
        });
    }
});


$(document).ready(function () {
    $('#room').change(function () {
        var selectedRoom = $(this).val();
        var selectedGender = '<?php echo $genderfilter; ?>';
        getseat(selectedRoom, selectedGender);
    });


     function getseat(room, gender) {
        $.ajax({
            type: "POST",
            url: "get_seater.php",
            data: {
                room: room,
                gender: gender
            },
            success: function (data) {
                console.log(data);
                $('#seater').html(data);
            }
        });
            $.ajax({
            type: "POST",
            url: "get_seater.php",
            data: {
                gender: gender
            },
            success: function (data) {
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
						<h2 class="page-title ms-3">Registration </h2>
			            <div class="mt-5">
                        <div class="col-md-8 offset-2">
                    <div class="card mx-4 shadow mt-3">
                    <div class="card-header bg-success bg-opacity-75 text-center text-white fs-3">
                        Booking Request
                    </div>
                    <div class="card-body my-4">
                        <p class="card-text mb-2"><?php
                        $uid=$_SESSION['login'];
							 $stmt=$mysqli->prepare("SELECT emailid,request FROM roomregistration WHERE emailid=? || regno=? ");
				$stmt->bind_param('ss',$uid,$uid);
				$stmt->execute();
				$stmt -> bind_result($email,$requestnum);
				$rs=$stmt->fetch();
				$stmt->close();
				if($rs)
				{ 
                    if($requestnum===0){?>
			<h3 style="color: red" align="center">Unfortunately, your booking request has been CANCELLED.</h3>
        <?php }else if($requestnum===1){?>
            <h3 style="color: green" align="center">Your booking request has been successfully ACCEPTED.</h3>
        <?php }else if($requestnum===2){?>
            <h3 style="color: lightblue" align="center">Your booking request is currently in PROGRESS.</h3>
        <?php } ?></p>
                        <div class="text-center">
                        <a href="room-details.php" class="btn btn-lg btn-primary mt-4 py-3">View Your Room Details</a>
                        </div>
                    </div>
                    <div class="card-footer bg-success bg-opacity-75 pb-4">
                    </div>
                    </div>
                    </div>
                    </div>
					</div>
					</div>
				<?php } else { ?>			

<div class="row">
    <div class="col-12">
    <?php
 $hostelName = "";
    if($genderfilter === 'male'){
        $hostelName = "alinkar";
    }
    else if ($genderfilter === 'female'){
        $hostelName = "mudra"; 
           }
?>

<form method="post" action="" class="form-horizontal">
<div class="form-group">
<label class="col-sm-2 control-label">Hostel Name : </label>
<div class="col-sm-8">
<input type="text" name="hostelname" id="hostelname"  class="form-control" value="<?php echo $hostelName; ?>" readonly >
</div>
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

<?php }} ?>

</select> 





</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room no. </label>
<div class="col-sm-8">
<select name="room" id="room"class="form-control" onBlur="checkAvailability()" required> 
<option value="">Select Room</option>
<span id="room-availability-status" style="font-size:12px;"></span>
<?php 

if($genderfilter==='male'){
    $query ="SELECT room_no FROM alinkar WHERE available != 0 ";
$stmt2 = $mysqli->prepare($query);

$stmt2->execute();
$res=$stmt2->get_result();
while($row=$res->fetch_object())
{
?>
<option data-seater="<?php echo $row->seater;?>" value="<?php echo $row->room_no;?>"> <?php echo $row->room_no;?></option>
<?php } 

}else if($genderfilter==='female'){
    $query ="SELECT room_no FROM mudra WHERE available != 0 ";
    $stmt2 = $mysqli->prepare($query);
    $stmt2->execute();
    $res=$stmt2->get_result();
    while($row=$res->fetch_object())
    {
?>
<option data-seater="<?php echo $row->seater;?>" value="<?php echo $row->room_no;?>"><?php echo $row->room_no;?></option>

<?php }} ?>

</select> 
<span id="room-availability-status" style="font-size:12px;"></span>

</div>
</div>



<?php
    if($genderfilter === 'male'){
        $query = "SELECT fees FROM fees WHERE hostelName = 'alinkar'";
    }
    else if ($genderfilter === 'female'){
        $query = "SELECT fees FROM fees WHERE hostelName = 'mudra'";
    }
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $res=$stmt->get_result();
    $meal_expenses = null;
if ($row = $res->fetch_assoc()) {
    $fees = $row['fees'];
}

$stmt->close();
?>


<div class="form-group">
<label class="col-sm-2 control-label">Hostel Fee</label>
<div class="col-sm-8">
<input type="text" name="fpm" id="fpm"  class="form-control" value="<?php echo htmlspecialchars($fees); ?>" readonly="true">
</div>
</div>
<?php
    if($genderfilter === 'male'){
        $query = "SELECT meal_expenses FROM fees WHERE hostelName = 'alinkar'";
    }
    else if ($genderfilter === 'female'){
        $query = "SELECT meal_expenses FROM fees WHERE hostelName = 'mudra'";
    }
    $stmt = $mysqli->prepare($query);
    $stmt->execute();
    $res=$stmt->get_result();
    $meal_expenses = null;
if ($row = $res->fetch_assoc()) {
    $meal_expenses = $row['meal_expenses'];
}

$stmt->close();
?>




<div class="form-group">
<label class="col-sm-2 control-label">Food Fee Per Month</label>
<div class="col-sm-8 mt-3">
<input type="text" name="" id=""  class="form-control" value="<?php echo htmlspecialchars($meal_expenses); ?>" readonly="true">
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
<div class="col-sm-8 mt-3">
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
<label class="col-sm-2 control-label">Emergency Contact : </label>
<div class="col-sm-8 mt-3">
<input type="text" name="econtact" id="econtact"  class="form-control" required="required" pattern="09[0-9]{7,9}" title="09XXXXXXXXX">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian  Name : </label>
<div class="col-sm-8 mt-3">
<input type="text" name="gname" id="gname"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian  Relation : </label>
<div class="col-sm-8 mt-3">
<input type="text" name="grelation" id="grelation"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian Contact No. : </label>
<div class="col-sm-8 mt-3">
<input type="text" name="gcontact" id="gcontact"  class="form-control" required="required" pattern="09[0-9]{7,9}" title="09XXXXXXXXX">
</div>
</div>	
    
<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8 mt-3">
<textarea  rows="5" name="address"  id="address" class="form-control" placeholder="Type your current address....." required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="city" id="city"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">State : </label>
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
<br>
<div class="form-group ms-5">
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="adcheck" value="1">
  <label class="form-check-label" for="flexCheckDefault">
    Permanent Address same as Current address
  </label>
</div>
</div> 


<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8 mt-3">
<textarea  rows="5" name="paddress"  id="paddress" placeholder="Type your permanent address....." class="form-control" required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="pcity" id="pcity"  class="form-control" required="required">
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">State : </label>
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




<div class="col-sm-6 col-sm-offset-4 mt-3">
<button class="btn btn-lg btn-danger me-3" type="submit" style="align:center;">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-lg btn-success">
</div>
</form>
    </div>
</div>
<?php } ?>
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
<script
	type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
	></script>

</html>