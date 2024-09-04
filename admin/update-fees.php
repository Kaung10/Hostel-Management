<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
if (isset($_POST['submit'])) {
    $hostel = $_POST['hostel'];
    $hostel_fees = $_POST['hostel_fees'];
    $meal_expenses = $_POST['meal_expenses'];

      if (!is_numeric($hostel_fees) || !is_numeric($meal_expenses)) {
        echo "<script>alert('Hostel fees and meal expenses must be numeric values.');</script>";
    } else {
        // Prepare SQL statement to check if the hostel exists
        $sql = "SELECT hostelName FROM fees WHERE hostelName=?";
        $stmt1 = $mysqli->prepare($sql);
        $stmt1->bind_param('s', $hostel);
        $stmt1->execute();
        $stmt1->store_result();
        $row_cnt = $stmt1->num_rows;

        if ($row_cnt > 0) {
            // Hostel exists, update the fees and meal expenses
            $update_query = "UPDATE fees SET hostelFees=?, meal_expenses=? WHERE hostelName=?";
            $stmt2 = $mysqli->prepare($update_query);
            $stmt2->bind_param('dds', $hostel_fees, $meal_expenses, $hostel); 
            if ($stmt2->execute()) {
                echo "<script>alert('Fees and expenses have been updated successfully');</script>";
            } else {
                echo "<script>alert('Error updating record: " . $stmt2->error . "');</script>";
            }
        } else {
            // Hostel does not exist
            echo "<script>alert('Invalid hostel selected');</script>";
        }

        // Close statements
        $stmt1->close();
        $stmt2->close();
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
						<h2 class="page-title mt-3 ms-2 ">Update fees </h2>
							<div class="col-md-8 offset-2">
								<div class="panel panel-default border-0 shadow">
									<div class="panel-heading bg-success fs-6" style="color:white;">Update hostel and  food fees</div>
									<div class="panel-body">
									<!-- <?php if(isset($_POST['submit']))
{ ?>
<p style="color: red"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg']=""); ?></p>
<?php } ?> -->
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											


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

    <div class="form-group">
<label class="col-sm-2 control-label">Hostel fees :</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="hostel_fees" id="hostel_fees" value="" required="required" min="0">
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">Meal Expenses :</label>
<div class="col-sm-8">
<input type="number" class="form-control" name="meal_expenses" id="meal_expenses" value="" required="required" min="0">
</div>
</div> 

<div class="col-sm-8 col-sm-offset-2 text-center">
<input class="btn btn-lg my-2 btn-primary" type="submit" name="submit" value="Update" >
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