<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
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
	

<div class="brand clearfix" style="background:#009688; color:white;">
		<a href="#" class="logo" style="font-size:16px; background:#009688; color:white;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account" style="background:black;" S>
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="admin-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	</body>
</html>