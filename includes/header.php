<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
       /* Global CSS */
		.brand {
			position: relative;
			background: #009688;
			/* Adjust height as needed */
			/* line-height: 60px; */
		
		}


        .brand .logo {
            font-size: 16px;
            color: #ffff;
            text-decoration: none; /* Remove underline from link */
        }



        .menu-btn {
            display: none; /* Hide the menu button by default */
        }

        ul {
            list-style-type: none; /* Remove default bullet points */
            margin: 0;
            padding: 0;
        }

        ul li{
            display: block;
            /* padding: 0 5px; Add padding for spacing */
         /* Center content vertically */
            text-decoration: none;
            color: #000; /* Adjust link color */
            transition: ease-in-out 0.5s; /* Add transition effect */
			background: black;
        }

            ul li a{ 
			background:black; 
			transition:ease-in-out 0.5s; 

		    }

		ul li a:hover 
	    { 
		background:#009688 !important;
		border radius: none !important; 
	    }
        
    </style>
</head>
<body>
    <?php if(isset($_SESSION['id'])) { ?>
        <div class="brand clearfix">
            <div class="logo">Hostel Management System</div>
            <span class="menu-btn"><i class="fa fa-bars"></i></span>
            <ul class="ts-profile-nav">
                <li class="ts-account">
                    <a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
                    <ul>
                        <li><a href="my-profile.php">My Account</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    <?php } else { ?>
        <div class="brand clearfix">
            <a href="#" class="logo">Hostel Management System</a>
            <span class="menu-btn"><i class="fa fa-bars"></i></span>
        </div>
    <?php } ?>
</body>
</html>
