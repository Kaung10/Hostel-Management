
<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from alinkar where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
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
	<title>Room Management</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
    
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        select {
            padding: 5px;
            margin-left: 10px;
            
        }

        .seat{
        	margin-left: 20px;
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
						<h2 class="page-title mt-3 ms-2">Room Management</h2>
						<div class="panel panel-default">
							<div class="panel-heading bg-success fs-6" style="color:white;">All Room Details</div>

							<div class="panel-body">


								<table >

    
    <div class="d-flex">
    <label class="mt-2 me-3"for="filterOne">Check availability  :</label>
    <div class="">
        <select class="form-select" id="filterOne" onchange="filterTable()">
        <option value="all">All seat statuses</option>
        <option value="1">1 seat available</option>
        <option value="2">2 seats available</option>
        <option value="3">3 seats available</option>
        <option value="full">All seats full</option>
    </select>
    </div>
    <label class="mt-2 mx-3" for="filterTwo" class="seat">Choose seat  :</label>
    <div class="">
    <select class="form-select"  id="filterTwo" onchange="filterTable()">
        <option value="all">Seater 2 or 3</option>
        <option value="2">Seater 2</option>
        <option value="3">Seater 3</option>
    </select>
    </div>
    </div>
    
    

    
    

    <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Room Number</th>
                <th>Seat</th>
                <th>Available Seat</th>
                <th>Student Names</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        

            <?php	
$aid=$_SESSION['id'];
$ret="select * from alinkar";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
        $roomno = $row->room_no;
	  	?>


<tr><td><?php echo $cnt;?></td>
<td><?php echo $roomno;?></td> 
<td><?php echo $row->seater;?></td>
<td><?php echo $row->available;?></td>
<?php
$names = [];
$query = "SELECT name FROM roomregistration WHERE roomno=? AND gender='male' AND request!=0";
if ($stmt = $mysqli->prepare($query)) {
    $stmt->bind_param('i', $roomno);
    $stmt->execute();
    $stmt->bind_result($name);
    while ($stmt->fetch()) {
        $names[] = $name;
    }
    $stmt->close();
} else {
    die("Error in query preparation: " . $mysqli->error);
}

$namesList = implode(', ', $names);
?>
<td><?php echo htmlspecialchars($namesList, ENT_QUOTES, 'UTF-8'); ?></td>

<td><a href="edit-room.php?id=<?php echo $row->id; ?>&hostel=alinkar"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
<a href="manage-alinkarrooms.php?del=<?php echo $row->id;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>

        </tbody>
    </table>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>


</div>


<script>
function filterTable() {
    var filterOneValue = document.getElementById("filterOne").value;
    var filterTwoValue = document.getElementById("filterTwo").value;

    var rows = document.getElementById("zctb").getElementsByTagName("tbody")[0].getElementsByTagName("tr");

    for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        var availableSeats = parseInt(row.getElementsByTagName("td")[3].innerText);
        var seaterType = parseInt(row.getElementsByTagName("td")[2].innerText);
        var showRow = true;

        if (filterOneValue !== "all") {
            if (filterOneValue === "full") {
                if (availableSeats !== 0) {
                    showRow = false;
                }
            } else if (availableSeats !== parseInt(filterOneValue)) {
                showRow = false;
            }
        }

        if (filterTwoValue !== "all" && seaterType !== parseInt(filterTwoValue)) {
            showRow = false;
        }

        row.style.display = showRow ? "" : "none";
    }
}
</script>


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
