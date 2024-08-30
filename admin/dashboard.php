<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	


</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title" style="margin-top:1%">Dashboard</h2>
						
						 <!-- Content Row -->
						 <div class="row">

				<!-- Student Male Card -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-primary shadow-sm h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
										Title Name</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">Number Of Student</div>

									<div class="mt-2"><a href="manage-students.php" class="">Full Detail <i class="fa fa-arrow-right"></i></a></div>
								</div>
								<div class="col-auto">
									<i class="fa-solid fa-person fa-2x fs-1 text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Student Female Card  -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-success shadow-sm h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-lg font-weight-bold text-success text-uppercase mb-1">
										Title</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">Number Of Student</div>

									<div class="mt-2"><a href="manage-students.php" class="">Full Detail <i class="fa fa-arrow-right"></i></a></div>
								</div>
								<div class="col-auto">
									<i class="fa-solid fa-person-dress fs-1 text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Alinkar Card -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-info shadow-sm h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-lg font-weight-bold text-info text-uppercase mb-1">Alinkar
									</div>
									<div class="row no-gutters align-items-center">
										<div class="col-auto">
											<div class="h5 mb-0 font-weight-bold text-gray-800">Number Of Student</div>

											<div class="mt-2"><a href="manage-students.php" class="">Full Detail <i class="fa fa-arrow-right"></i></a></div>
										</div>
										<div class="col">
											<div class=" mr-2">
												<div class="progress-bar bg-info" role="progressbar"
													style="width: 50%" aria-valuenow="50" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-auto">
									<i class="fa-solid fa-house-user fs-1 text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mudra -->
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card border-left-warning shadow-sm h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-lg font-weight-bold text-warning text-uppercase mb-1">
										Mudra</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">Number Of Students</div>

									<div class="mt-2"><a href="manage-students.php" class="">Full Detail <i class="fa fa-arrow-right"></i></a></div>
								</div>
								<div class="col-auto">
									<i class="fa-solid fa-house-user fs-1 text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>

				<!-- Content Row -->

				<div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
						<div class="card draggable shadow" style="height:345px;">
						<div class="card-header bg-transparent">
							<h6 class="text-uppercase text-muted ls-1 mb-1">Number of Students for </h6>
							<h5 class="h3 mb-0">Each Semester</h5>
						</div>
						<div class="card-body">
							<div class="chart">
							<canvas id="chart-bars" class="chart-bar chart-canvas" width="200" height="230"></canvas>
							</div>
						</div>
						</div>

                        </div>

                        <!-- Pie Chart -->
						 
                        <div class="card mb-4 shadow z-index-2 draggable col-4">
						<div class="card-header pb-0">
							<h6 class="mb-1">Room Chart</h6>
						</div>
						<div class="card-body card-body px-3 pt-lg-6 pb-lg-5">
							<div class="row h-100">
								<div class="col-lg-5 my-auto text-center d-lg-block d-flex justify-content-center">
									<div id="chart-pie" class="chart-pie"></div>
								</div>
							</div>
						</div>
					</div>
					</div>
					







<!-- 
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center"> -->

<?php
$result ="SELECT count(*) FROM roomregistration ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>

													<!-- <div class="stat-panel-number h1 "><?php echo $count;?></div>
													<div class="stat-panel-title text-uppercase" style=" color:white;"> Students</div>
												</div>
											</div>
											<a href="manage-students.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center"> -->
<?php

$result1 ="SELECT (SELECT COUNT(*) FROM alinkar) + (SELECT COUNT(*) FROM mudra) AS total_count";

$stmt1 = $mysqli->prepare($result1);
$stmt1->execute();
$stmt1->bind_result($count1);
$stmt1->fetch();
$stmt1->close();
?>												
													<!-- <div class="stat-panel-number h1 "><?php echo $count1;?></div>
													<div class="stat-panel-title text-uppercase">Total Rooms </div>
												</div>
											</div>
											<a href="manage-rooms.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
								</div>
							</div>
						</div> -->

					
						
						

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../admin/js/chart.js/Chart.js"></script>
	<script src="../admin/js/chart.js/graph.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>