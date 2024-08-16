
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
			color:black !important;
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
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label mt-4 text-primary">Admin Mode</li>
				<li><a href="dashboard.php" class="text-primary"><i class="fa fa-dashboard text-primary"></i> Dashboard</a></li>

					<li><a href="#" class="text-primary"><i class="fa fa-desktop  text-primary"></i> Rooms</a>
					<ul>
 
						<li><a href="create-room.php" class="text-primary" >Add a Room</a></li>
						<li><a href="manage-rooms.php" class="text-primary">Manage Rooms</a></li>
                        <li><a href="update-fees.php" class="text-primary">Update fees</a></li>
					</ul>
				</li>

				<li><a href="registration.php" class="text-primary"><i class="fa fa-user text-primary"></i>Student Registration</a></li>
				<li><a href="manage-students.php" class="text-primary"><i class="fa fa-user text-primary"></i>Manage Students</a></li>
                <li><a href="requests.php" class="text-primary"><i class="fa fa-file  text-primary"></i>Request Forms</a></li>
				<li><a href="access-log.php" class="text-primary"><i class="fa fa-file  text-primary"></i>User Access logs</a></li>

                
		</nav>




		</body>
</html>