
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
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
    </style>
</head>
<body>
	


<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>

					<li><a href="#"><i class="fa fa-desktop"></i> Rooms</a>
					<ul>
						<li><a href="create-room.php" >Add a Room</a></li>
						<li><a href="manage-rooms.php">Manage Rooms</a></li>
					</ul>
				</li>

				<li><a href="registration.php"><i class="fa fa-user"></i>Student Registration</a></li>
				<li><a href="manage-students.php"><i class="fa fa-users"></i>Manage Students</a></li>
				<li><a href="access-log.php"><i class="fa fa-file"></i>User Access logs</a></li>

                
		</nav>




		</body>
</html>