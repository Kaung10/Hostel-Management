<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if (isset($_POST['submit'])) {
    $seater = $_POST['seater'];
	$available = $_POST['available'];
    $roomno = $_POST['rmno'];
    $hostel = $_POST['hostel'];

    // Determine which table to use based on the selected hostel
    if ($hostel == 'alinkar') {
        $table = 'alinkar';
    } elseif ($hostel == 'mudra') {
        $table = 'mudra';
    } else {
        echo "<script>alert('Invalid hostel selected');</script>";
        exit;
    }

    // Prepare SQL statement to check if the room number exists in the selected table
    $sql = "SELECT room_no FROM $table WHERE room_no=?";
    $stmt1 = $mysqli->prepare($sql);
    $stmt1->bind_param('i', $roomno);
    $stmt1->execute();
    $stmt1->store_result();
    $row_cnt = $stmt1->num_rows;

    if ($row_cnt > 0) {
        // Room number already exists
        echo "<script>alert('Room number already exists in the selected hostel');</script>";
    } else {
        // Insert a new row into the selected table
        $query = "INSERT INTO $table (seater, available, room_no) VALUES (?, ?, ?)";
        $stmt2 = $mysqli->prepare($query);
        $stmt2->bind_param('iii', $seater, $available, $roomno); // Set 'available' column to the same value as 'seater'
        $stmt2->execute();
        echo "<script>alert('Room has been added successfully');</script>";
    }

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
	<title>Create Room</title>
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
<style> 
	.col-sm-8 {
		align:center; 
	}
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
					<h2 class="page-title mt-3 ms-2">Add a Room </h2>
					<div class="col col-2"></div>
					<div class="col-md-8">
					
						
	
								<div class="panel panel-default border-0 shadow">
									<div class="panel-heading bg-success fs-6" style="color:white;">Add a Room</div>
									<div class="panel-body">
									<?php if(isset($_POST['submit']))
{ ?>
<p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
<?php } ?>
										<form method="post" class="form-horizontal">
											
											<div class="form-group my-3">
												<label class="col-sm-2 control-label">Select Seater :  </label>
												<div class="col-sm-8">
												<Select name="seater" class="form-control" required>
<option value="">Select Seater</option>
<option value="1">Single Seater</option>
<option value="2">Two Seater</option>
<option value="3">Three Seater</option>
</Select>
</div>
</div>

											
											<div class="form-group">
												<label class="col-sm-2 control-label">Select Available :  </label>
												<div class="col-sm-8">
												<Select name="available" class="form-control" required>
<option value="">Select available</option>
<option value="1">One available</option>
<option value="2">Two available</option>
<option value="3">Three available</option>
</Select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room No :</label>
<div class="col-sm-8">
<input type="number" min="0" class="form-control" name="rmno" id="rmno" value="" required="required">
</div>
</div>

<div class="form-group">
        <label class="col-sm-2 control-label">Select Hostel :</label>
        <div class="col-sm-8">
            <select name="hostel" class="form-control" required>
                <option value="">Select Hostel</option>
                <option value="alinkar">Alinkar</option>
                <option value="mudra">Mudra</option>
            </select>
        </div>
    </div>

<div class="col-sm-8 col-sm-offset-2 text-center">
<input class="btn btn-lg  btn-primary mb-2 mt-2" type="submit" name="submit" value="Create Room" >
												</div>
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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</script>
</body>

</html>