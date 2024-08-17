<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Forms</title>

    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        main {
            margin-left: 220px;
            padding: 1em;
        }

        .form-list {
            margin: 0;
            padding: 0;
        }

        .form-bar {
            display: flex;
            justify-content: space-between;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 10px;
        }

        .name {
            font-weight: bold;
        }

        .info {
            font-style: italic;
        }

        .actions {
            display: flex;
        }

        .cancel-button, .confirm-button {
            margin-left: 10px;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .cancel-button {
            background-color: #e74c3c;
            color: #fff;
        }

        .confirm-button {
            background-color: #2ecc71;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php');?> 
        
    <div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
                        
                    <h2 class="page-title" style="margin-top:4%">Hostel Request Forms</h2>
						<div class="panel panel-default">
							
							<div class="panel-heading"style="background:#009688; color:white;">All Request</div>
							<div class="panel-body">

							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Student Name</th>
				                            <th>Hostel Name </th>
											<th>Room Number</th>
                                            <th>Request</th>
										</tr>
									</thead>
									
									<tbody>
    </div>
    </div>
    </div>
    </div>
    </div>
    <main>    
        <div class="form-list">
            <?php
            // Handle AJAX request
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
                $status = isset($_POST['status']) ? intval($_POST['status']) : 0;

                if ($id > 0 && ($status === 0 || $status === 1)) {
                    // Update query
                    $query = "UPDATE roomregistration SET request = ? WHERE id = ?";
                    $stmt = $mysqli->prepare($query);
                    $stmt->bind_param("ii", $status, $id);
                    if ($stmt->execute()) {
                        echo "success";
                    } else {
                        echo "error: " . $stmt->error;
                    }
                    $stmt->close();
                } else {
                    echo "error: Invalid input";
                }

                $mysqli->close();
                exit;
            }
            
            // Query to fetch data where request column is 2
            $query = "SELECT * FROM roomregistration WHERE request = 2";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    // Determine the label and room number
                    $label = (strcasecmp($row['gender'], 'male') == 0) ? "Alinkar" : "Mudra";
                    $roomNumber = htmlspecialchars($row['roomno']);
                    $id = htmlspecialchars($row['id']);
                    // show list using php function if you want to change UI, it is herew
                    // echo '<div class="form-bar" id="item-' . $id . '">';
                    echo '<tr>';
                    echo '<td><span class="name">' . htmlspecialchars($row['name']) . '</span></td>';
                    echo '<td><span class="info">'.$label.'</span></td>';
                    echo '<td><span class="info">'.$roomNumber.'</span></td>';
                    echo '<td><span class="actions">
                          <button class="confirm-button btn btn-success fs-6 me" onclick="updateRequest(' . $id . ', 1)"><i class="fa-solid fa-check"></i></button>
                          <button class="cancel-button btn btn-danger fs-6 " onclick="updateRequest(' . $id . ', 0)"><i class="fa-solid fa-xmark"></i></button>
                          </span></td>';
                    echo '</tr>';
                    echo '</div>';
                }
            }
            // } else {
            //     echo 'No requests found.';
            // }

            // Close connection
            $mysqli->close();
            ?>
        </div>
    </main>

    <script>
        function updateRequest(id, status) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "", true); // Set your endpoint URL here
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        console.log('Response Text:', xhr.responseText); // Debugging output
        if (xhr.status === 200) {
            // Check if response text ends with "success"
            if (xhr.responseText.trim().endsWith("success")) {
                var element = document.getElementById('item-' + id);
                if (element) {
                    element.style.display = 'none';
                }
            } else {
                alert('Error updating request: ' + xhr.responseText);
            }
        } else {
            alert('HTTP Error: ' + xhr.status);
        }
    }
};


    xhr.onerror = function () {
        alert('Request failed');
    };

    xhr.send("id=" + encodeURIComponent(id) + "&status=" + encodeURIComponent(status));
}

    </script>
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

</body>
</html>
