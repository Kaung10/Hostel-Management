<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>



	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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

	<style>
		ul li a:hover 
	{ 
		
		background:#d3d3d3 !important;
		border radius: none !important; 
	}
	</style>
</head>

<body>
	
<!-- Navbar -->
<nav class="navbar navbar-expand-lg rounded-0 bg-primary sticky-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->


    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <div class="fs-3 d-flex align-items-center text-white" >Hostel Management System</div>
      </a>

    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
      <!-- Avatar -->
      <div class="dropdown px-0">
        <a
          data-mdb-dropdown-init
          class="dropdown-toggle d-flex align-items-center px-0 hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          aria-expanded="false"
        >
          <img
            src="../img/ts-avatar.jpg"
            class="border border-3 border-white rounded-circle"
            width="45%" 
			      height="45%"
            alt="Black and White Portrait of a Man"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item btn fs-5 text-primary bg-white " href="my-profile.php">My profile</a>
          </li>
          <li>
            <a class="dropdown-item fs-5 text-primary bg-white" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

	</body>

	<!-- MDB -->
	<script
	type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
	></script>
</html>