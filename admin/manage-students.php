<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

if (isset($_GET['del'])) {
    $id = intval($_GET['del']);

    $query = "SELECT gender, roomno FROM roomregistration WHERE id=?";
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->bind_result($gender, $roomno);
        $stmt->fetch();
        $stmt->close();

        $deleteQuery = "DELETE FROM roomregistration WHERE id=?";
        $stmt = $mysqli->prepare($deleteQuery);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();

        // Update the available count based on gender
        if ($gender === 'male') {
            $updateQuery = "UPDATE alinkar SET available = available + 1 WHERE room_no=?";
        } else if ($gender === 'female') {
            $updateQuery = "UPDATE mudra SET available = available + 1 WHERE room_no=?";
        }

        if (isset($updateQuery)) {
            $stmt = $mysqli->prepare($updateQuery);
            $stmt->bind_param('i', $roomno); // Bind only the roomno parameter
            $stmt->execute();
            $stmt->close();
        }
    } else {
        die("Error in query preparation: " . $mysqli->error);
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
    <title>Manage Rooms</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
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
            margin-bottom: 10px;
        }
    </style>
    <script language="javascript" type="text/javascript">
    var popUpWin = 0;
    function popUpWindow(URLStr, left, top, width, height) {
        if (popUpWin) {
            if (!popUpWin.closed) popUpWin.close();
        }
        popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 510 + ',height=' + 430 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
    }
    </script>

</head>

<body>
    <?php include('includes/header.php');?>

    <div class="ts-main-content">
        <?php include('includes/sidebar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title" style="margin-top:1%">Manage Registered Students</h2>
                        <div class="panel panel-default">

                            <div class="panel-heading" style="background:#009688; color:white;">All Room Details</div>
                            <div class="panel-body">
                                <label for="filterOne">Semester:</label>
                                <select id="filterOne" onchange="filterTable()">
                                    <option value="all">Select</option>
                                    <?php
                                    for ($i = 1; $i <= 10; $i++) {
                                        echo "<option value='Semester $i'>$i</option>";
                                    }
                                    ?>
                                </select>

                                <label for="hostelSelect" style="margin-left:20px;">Hostel:</label>
                                <select id="hostelSelect" onchange="filterTable()">
                                    <option value="all">Select</option>
                                    <option value="Alinkar">Alinkar</option>
                                    <option value="Mudra">Mudra</option>
                                </select>

                                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Student Name</th>
                                            <th>Reg no</th>
                                            <th>Contact no</th>
                                            <th>room no</th>
                                            <th>Seater</th>
                                            <th>Semester</th>
                                            <th>Hostel</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $aid = $_SESSION['id'];
                                        $ret = "select * from roomregistration where request = 1";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute();
                                        $res = $stmt->get_result();
                                        $cnt = 1;
                                        while ($row = $res->fetch_object()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $cnt; ?></td>
                                                <td class="fs-6"><?php echo $row->name; ?></td>
                                                <td class="fs-6"><?php echo $row->regNo; ?></td>
                                                <td class="fs-6">0<?php echo $row->contactno; ?></td>
                                                <td class="fs-6"><?php echo $row->roomno; ?></td>
                                                <td class="fs-6"><?php echo $row->seater; ?></td>
                                                <td class="fs-6"><?php echo $row->semester; ?></td>
                                                <td class="fs-6">
												<?php 
    if ($row->gender == 'male') {
        echo 'Alinkar';
    } elseif ($row->gender == 'female') {
        echo 'Mudra';
    } else {
        echo 'N/A'; // In case gender is not male or female
    }
    ?>												</td>
                                                <td class="text-center">
                                                    <a href="student-details.php?id=<?php echo $row->id; ?>" title="View Full Details"><i class="fa fa-desktop"></i></a>&nbsp;&nbsp;
                                                    <a href="manage-students.php?del=<?php echo $row->id; ?>" title="Delete Record" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                            $cnt = $cnt + 1;
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
    <script>
        function filterTable() {
            var filterOneValue = document.getElementById("filterOne").value;
            var hostelValue = document.getElementById("hostelSelect").value;

            var rows = document.getElementById("zctb").getElementsByTagName("tbody")[0].getElementsByTagName("tr");

            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                var semesterColumn = row.getElementsByTagName("td")[6].innerText.trim(); // Trim extra spaces
                var hostelColumn = row.getElementsByTagName("td")[7].innerText.trim(); // Trim extra spaces

                var showRow = true;

                if (filterOneValue !== "all" && semesterColumn !== filterOneValue) {
                    showRow = false;
                }

                if (hostelValue !== "all" && hostelColumn !== hostelValue) {
                    showRow = false;
                }

                row.style.display = showRow ? "" : "none";
            }
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