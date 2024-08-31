<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
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
    <title>Room Details</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <script language="javascript" type="text/javascript">
        var popUpWin = 0;

        function popUpWindow(URLStr, left, top, width, height) {
            if (popUpWin) {
                if (!popUpWin.closed) popUpWin.close();
            }
            popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + width + ',height=' + height + ',left=' + left + ',top=' + top + ',screenX=' + left + ',screenY=' + top + '');
        }
    </script>
</head>

<body>
    <?php include('includes/header.php'); ?>

    <div class="ts-main-content">
        <?php include('includes/sidebar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row" id="print">
                    <div class="col-md-12">
                        <h2 class="page-title" style="margin-top:3%">Rooms Details</h2>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background:#009688; color:white;">All Room Details</div>
                            <div class="panel-body">
                                <span style="float:left">
                                    <i class="fa fa-print fa-2x" aria-hidden="true" onclick="CallPrint()" style="cursor:pointer" title="Print the Report"></i>
                                </span>
                                <table id="zctb" class="table table-bordered" cellspacing="0" width="100%" border="1">
                                    <tbody>
                                        <?php

										$hostel_fee = 0;
										$food_fee_per_month = 0;

										// ... existing query to fetch room details

										

                                        $aid = $_SESSION['login'];
                                        $ret = "SELECT * FROM roomregistration WHERE emailid=? OR regno=?";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->bind_param('ss', $aid, $aid);
                                        $stmt->execute();
                                        $res = $stmt->get_result();
                                        $cnt = 1;

										

                                        while ($row = $res->fetch_object()) {
											$gender = $row->gender;
											if($gender==='male'){
											$sql_hostel_fee = "SELECT fees, meal_expenses FROM fees WHERE hostelName = 'alinkar'";
											$hostel1 = "Alinkar";
											} else {
												$sql_hostel_fee = "SELECT fees, meal_expenses FROM fees WHERE hostelName = 'mudra'";
												$hostel1 = "Mudra";
											}
										$result_hostel_fee = $mysqli->query($sql_hostel_fee);

										if ($result_hostel_fee->num_rows > 0) {
										while($row_fee = $result_hostel_fee->fetch_assoc()) {
										$hostel_fee = $row_fee['fees'];
										$food_fee_per_month = $row_fee['meal_expenses'];
										}
										}

                                        ?>
                                        <tr>
                                            <td colspan="6" style="text-align:center; color:#009688"><h3>Room Related Info</h3></td>
                                        </tr>
                                        <tr>
                                            <th>Registration Number :</th>
                                            <td colspan="2"><?php echo htmlspecialchars($row->regNo); ?></td>
                                            <th>Apply Date :</th>
                                            <td colspan="2"><?php echo htmlspecialchars($row->postingDate); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Room no :</b></td>
                                            <td colspan="2"><?php echo htmlspecialchars($row->roomno); ?></td>
                                            <th><b>Seater :</b></th>
                                            <td colspan="2"><?php echo htmlspecialchars($row->seater); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Duration :</b></td>
                                            <td colspan="2">5</td>
                                            <th><b>Stay From :</b></th>
                                            <td colspan="2"><?php echo htmlspecialchars($row->stayfrom); ?></td>
                                        </tr>



                                        <tr>
                                            <th>Hostel Fee:</th>
                                            <td colspan="2">
												<?php
												echo $hostel_fee;
												?>

											</td>
                                            <th>Food Fee Per Month:</th>
                                            <td colspan="2">
											<?php
												echo $food_fee_per_month;
												?>

											</td>
											
                                        </tr>
										
                                        <tr>
                                            <th>Total Fee :</th>
                                            <td colspan="2">
											<?php
												echo $hostel_fee + $food_fee_per_month;
												?>
											</td>
											
											<th >Hostel Name :</th>
											<td colspan="2">
												<?php
													echo $hostel1;
												?>
											</td>
											
                                        </tr>
                                        <tr>
                                            <td colspan="6" style="color:red"><h4>Personal Info</h4></td>
                                        </tr>
                                        <tr>
                                            <td><b>Reg No. :</b></td>
                                            <td><?php echo htmlspecialchars($row->regNo); ?></td>
                                            <td><b>Full Name :</b></td>
                                            <td><?php echo htmlspecialchars($row->name); ?></td>
                                            <td><b>Email :</b></td>
                                            <td><?php echo htmlspecialchars($row->emailid); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Contact No. :</b></td>
                                            <td><?php echo htmlspecialchars($row->contactno); ?></td>
                                            <td><b>Gender :</b></td>
                                            <td><?php echo htmlspecialchars($row->gender); ?></td>
                                            <td><b>Semester :</b></td>
                                            <td><?php echo htmlspecialchars($row->semester); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Emergency Contact No. :</b></td>
                                            <td><?php echo htmlspecialchars($row->egycontactno); ?></td>
                                            <td><b>Guardian Name :</b></td>
                                            <td><?php echo htmlspecialchars($row->guardianName); ?></td>
                                            <td><b>Guardian Relation :</b></td>
                                            <td><?php echo htmlspecialchars($row->guardianRelation); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Guardian Contact No. :</b></td>
                                            <td colspan="6"><?php echo htmlspecialchars($row->guardianContactno); ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" style="color:#009688;"><h4>Addresses</h4></td>
                                        </tr>
                                        <tr>
                                            <td><b>Correspondence Address</b></td>
                                            <td colspan="2">
                                                <?php echo htmlspecialchars($row->corresAddress); ?><br />
                                                <?php echo htmlspecialchars($row->corresCIty); ?><br />
                                                <?php echo htmlspecialchars($row->corresState); ?>
                                            </td>
                                            <td><b>Permanent Address</b></td>
                                            <td colspan="2">
                                                <?php echo htmlspecialchars($row->pmntAddress); ?><br />
                                                <?php echo htmlspecialchars($row->pmntCity); ?><br />
                                                <?php echo htmlspecialchars($row->pmnatetState); ?>
                                            </td>
                                        </tr>
                                        <?php
                                            $cnt++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
        $(function () {
            $("[data-toggle=tooltip]").tooltip();
        });

        function CallPrint() {
            var prtContent = document.getElementById("print");
            var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
            WinPrint.document.write('<html><head><title>Print</title></head><body>');
            WinPrint.document.write(prtContent.innerHTML);
            WinPrint.document.write('</body></html>');
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
    </script>
</body>

</html>
