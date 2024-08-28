<?php
    $current_url = $_SERVER['REQUEST_URI'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
    <!-- Font Awesome -->
	<link
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
	rel="stylesheet"
	/>
	<!-- Google Fonts -->
	<link
	href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
	rel="stylesheet"
	/>
	<!-- MDB -->
	<link
	href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
	rel="stylesheet"
	/>

    <!-- <style>
        .ts-sidebar {
            background: whitesmoke;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background: whitesmoke;
            padding: 5px;
            transition: background-color 0.5s;
        }

        ul li .ts-label {
            font-size: 24px;
            color: black;
        }

        ul li a {
            text-decoration: none;
            font-size: 14px;
            padding: 5px 5px;
            transition: ease-in-out 0.8s;
            background-color: whitesmoke;
        }

        ul li a:hover,
        i:hover {
            color: white;
            font-size: 14px;
            background: #009688;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .selected {
            background:#009688; 
        }
    </style> -->
</head>
<body>

        <nav class="ts-sidebar bg-white ">
			<ul class="ts-sidebar-menu bg-white">
			
				<li class="ts-label mt-4 text-primary  bg-white">Main</li>
				<li><a href="dashboard.php" class="text-primary  bg-white"><i class="fa fa-dashboard text-primary"></i> Dashboard</a></li>

				<!-- <li><a href="#" class="text-primary"><i class="fa fa-desktop  text-primary"></i> Rooms</a>
					<ul>
						<li><a href="create-room.php" class="text-primary" >Add a Room</a></li>
						<li><a href="manage-rooms.php" class="text-primary">Manage Rooms</a></li>
                        <li><a href="update-fees.php" class="text-primary">Update fees</a></li>
					</ul>
				</li> -->

				<!-- <li><a href="registration.php" class="text-primary"><i class="fa fa-user text-primary"></i>Student Registration</a></li> -->
				<li><a href="book-hostel.php" class="text-primary  bg-white"><i class="fa fa-file-o text-primary"></i>Book Hostel</a></li>
                <li><a href="room-details.php" class="text-primary  bg-white"><i class="fa fa-file-o text-primary"></i>Room Details</a></li>
				<li><a href="my-profile.php" class="text-primary  bg-white"><i class="fa fa-user text-primary"></i>My Profile</a></li>
                <li><a href="change-password.php" class="text-primary  bg-white"><i class="fa fa-files-o text-primary"></i>Change Password</a></li>
            </ul>
		</nav>

        
    
</body>
<!-- MDB -->
<script
	type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
	></script>
</html>
