

<?php  $this->view("includes/AdminDashboard",$data);?> 

<!-- Contains welcome, admin profile, number of users, etc.. -->


<html>

<body>
    <div class="main-container">
		<div class="pd-ltr-20">
            <div class="card-box pd-20 height-50-p mb-30">  <!-- edited from height-100 to 20 to pervent errors -->
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="<?=ASSETS?>Images/Admin/Admins.jpg" alt="">
                        </div>
                        <div class="col-md-8">
                            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                                <span style="color:#1b98e0;">Welcome back </span> <div class="weight-600 font-30 text-blue " style="color:#13293d;">Ahmed Jamal!</div>
                            </h4>
                            
                        </div>
                    </div>
            </div>

            <div class="row">
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1" style="text-align: center; height:100px;">
                    <br><div class="d-flex flex-wrap align-items-center">
						
                        &nbsp; &nbsp;<i class="fa fas fa-users" style="font-size:30px; color:#1b98e0;"></i> &nbsp; &nbsp;
							<div class="h4 mb-0"><h6 class="emp"  >50 Users</h6></div> <!-- Read from database -->
							
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1" style="text-align: center;">
						<br><div class="d-flex flex-wrap align-items-center" >
                        &nbsp; &nbsp;<i class="fas fa-user-tie" style="font-size:30px; color:#1b98e0;"></i> &nbsp; &nbsp;
                            <div class="h4 mb-0"><h6 class="emp"  > 4 Employees </h6></div>
								
						</div>
					</div>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1" style="text-align: center;">
						<br><div class="d-flex flex-wrap align-items-center">
							
							&nbsp; &nbsp;<i class="fas fa-user-circle" style="font-size:30px; color:#1b98e0;"></i> &nbsp; &nbsp;
								<div class="h4 mb-0"><h6 class="emp"  >350 Visitors</h6></div> <!-- Read from Google analytics -->
								
						</div>
					</div>
				</div>
				
			</div>


        </div>
    </div>



</body>

</html>

