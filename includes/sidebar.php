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
    <?PHP if(isset($_SESSION['id']))
				{?>
            <li class="ts-label">Main</li>
            <li><a <?php if(strpos($current_url, 'dashboard.php') !== false) echo 'class="selected"'; ?> href="dashboard.php" style="color: black;"><i class="fa fa-desktop"></i>Dashboard</a></li>
            <li><a <?php if(strpos($current_url, 'book-hostel.php') !== false) echo 'class="selected"'; ?> href="book-hostel.php" style="color: black;"><i class="fa fa-file-o"></i>Book Hostel</a></li>
            <li><a <?php if(strpos($current_url, 'room-details.php') !== false) echo 'class="selected"'; ?> href="room-details.php" style="color: black;"><i class="fa fa-file-o"></i>Room Details</a></li>
            <li><a <?php if(strpos($current_url, 'my-profile.php') !== false) echo 'class="selected"'; ?> href="my-profile.php" style="color: black;"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a <?php if(strpos($current_url, 'change-password.php') !== false) echo 'class="selected"'; ?> href="change-password.php" style="color: black;"><i class="fa fa-files-o"></i>Change Password</a></li>
            <?php } else { ?>
				
				<li><a <?php if(strpos($current_url, 'registration.php') !== false) echo 'class="selected"'; ?> href="registration.php" style="color: black;"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="index.php"style="color: black;"><i class="fa fa-users"></i> User Login</a></li>
				<?php } ?>
        </ul>
    </nav>
</body>

</html>
