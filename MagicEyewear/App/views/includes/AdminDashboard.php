<!-- Contains side nav and header -->

<!-- Side Nav -->
<!-- View Website (guest view)-->
<!-- Frames -> 1 page: add, delete, modify frame -->
<!-- Users -> 1 page: add, delete user -->
<!-- View Orders -->
<!-- Admin Profile -->


<html>
<head>

	
    <!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	<!--Custom CSS-->
	<link rel="stylesheet" href="<?=ASSETS?>css/AdminStyle.css?v=<?php echo time(); ?>">

	<!-- CSS -->
    <link href="<?=ASSETS?>css/core.css" rel="stylesheet" type="text/css" >
    <link href="<?=ASSETS?>css/style.css" rel="stylesheet" type="text/css">

	<!-- Add Google Analytics -->

</head>

<body>

    <div class="header">
        <div class="header-left">
			<a href="<?=ROOT?>logout" style="padding-left:50px;" ><button type="submit" style="width:100px; "> Sign out </button></a>
		</div>
        <div class="header-right" style="padding-top:25px; padding-right:30px;">
            
            <a style="color:#0b132b;" class="dropdown-toggle no-arrow" href="<?=ROOT?>AdminProfile" role="button" 
			><h6><?php echo $_SESSION['firstName']; echo "&nbsp;"; echo $_SESSION['lastName']; ?></h6></a>
                  
            
        </div>
            
    </div>

    <div class="left-side-bar">
		<div class="brand-logo">
			<br>
		<a href="<?=ROOT?>index">
        <img style="display: block; margin-left: auto; margin-right: auto; width: 80%; " src="<?=ASSETS?>Images/Admin/eyecare-logo-white.png" alt="" class="dark-logo"> </a>
		</div> <br> <br>
		<div class="menu-block customscroll">
			<div class="sidebar-menu" >
				
				<a href="<?=ROOT?>Admin/AdminHomepage" class="linkbtn"><i class="fas fa-home"></i> Home</a> <br>
				<a href="<?=ROOT?>Frames" class="linkbtn"><i class="fas fa-glasses"></i> Frames</a> <br>
				<a href="<?=ROOT?>Users" class="linkbtn"><i class="fa fas fa-users" ></i> Users</a> <br> 
				<a href="<?=ROOT?>Orders" class="linkbtn"><i class="fa  fa-eye" ></i> Orders</a> <br>
				<a href="<?=ROOT?>AdminProfile" class="linkbtn"><i class="fa fa-fw fa-user" ></i> Profile</a>  <br> 
				<a href="<?=ROOT?>index" class="linkbtn"><i class="fa fas fa-globe" ></i> View Website</a> <br> 
					
			</div>
		</div>
	</div>


    <script src="<?=ASSETS?>js/core.js"></script>
    
</body>


</html>
