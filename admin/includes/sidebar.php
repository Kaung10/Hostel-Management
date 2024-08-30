
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
    <style>

    .active{
        background: #ffffff;
        border-left: 3px solid blue;
    }

    /* .active {
        color: #ffffff;
    }

    .request {
        text-color: black;
    } */

    </style>
</head>
<body>
	


<nav class="ts-sidebar bg-white shadow ">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label mt-4 text-primary">Admin Mode</li>
				<li class=""><a href="dashboard.php" class="text-primary nav_link"><i class="fa fa-dashboard text-primary"></i> Dashboard</a></li>

					<li class=""><a href="#" class="text-primary"><i class="fa fa-desktop  text-primary"></i> Rooms</a>
					<ul>
						<li><a href="create-room.php" class="text-primary" >Add a Room</a></li>
						<li><a href="manage-rooms.php" class="text-primary">Manage Rooms</a></li>
                        <li><a href="update-fees.php" class="text-primary">Update fees</a></li>
					</ul>
				</li>

				<li class=""><a href="registration.php" class="text-primary nav_link"><i class="fa fa-user text-primary"></i>Student Registration</a></li>
				<li><a href="manage-students.php" class="text-primary nav_link"><i class="fa fa-user text-primary"></i>Manage Students</a></li>
                <li><a href="requests.php" class="text-primary nav_link"><i class="fa-regular text-primary fa-newspaper"></i>Request Forms</a></li>
                <li><a href="cancel_list.php" class="text-primary nav_link"><i class="fa-solid text-primary fa-rectangle-xmark"></i>Canceled Request List</a></li>
				<li><a href="access-log.php" class="text-primary nav_link"><i class="fa fa-file  text-primary"></i>User Access logs</a></li>
                

                
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
</html>