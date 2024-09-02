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

    <style>
        .active{
        background: #ffffff;
        border-left: 3px solid blue;
        }
    </style>
</head>
<body>

        <nav class="ts-sidebar bg-white shadow">
			<ul class="ts-sidebar-menu bg-white">
			
				<li class="ts-label mt-4 text-primary  bg-white">Main</li>
				<li><a href="book-hostel.php" class="text-primary nav_link  bg-white"><i class="fa-solid fa-house text-primary"></i>Home</a></li>
                <li><a href="room-details.php" class="text-primary nav_link  bg-white"><i class="fa fa-file-o text-primary"></i>Room Details</a></li>
				<li><a href="my-profile.php" class="text-primary nav_link  bg-white"><i class="fa fa-user text-primary"></i>My Profile</a></li>
                <li><a href="change-password.php" class="text-primary nav_link  bg-white"><i class="fa fa-files-o text-primary"></i>Change Password</a></li>
            </ul>
		</nav>

        
    
</body>

<script>
            document.addEventListener('DOMContentLoaded', function () {
            // Get the current URL path and extract the last file name
            const path = window.location.pathname;
            const fileName = path.substring(path.lastIndexOf('/') + 1);

            // Select all sidebar menu items (assuming they have a common class, e.g., 'sidebar-item')
            const sidebarItems = document.querySelectorAll('.nav_link');

            sidebarItems.forEach(function (item) {
                // Get the href attribute of the anchor tag
                const itemHref = item.getAttribute('href');

                // Check if the href ends with the file name
                if (itemHref && itemHref.endsWith(fileName)) {
                    // Add the active class to the matching item
                    item.classList.add('active');
                }
            });
        });

        </script>

<!-- MDB -->
<script
	type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
	></script>
</html>
