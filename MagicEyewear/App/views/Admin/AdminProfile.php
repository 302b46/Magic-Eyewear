

<?php  $this->view("includes/AdminDashboard",$data);?> 

<!-- Contains editing admin credentials -->

<html>
<body>


<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">

				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
						</div>
					</div>
				</div>

			<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							
							<h5 class="text-center h5 mb-0">Ahmed Jamal</h5>
							<p class="text-center text-muted font-14">Admin in Magic Eyecare website </p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue" style="color:#1c2d5e;">Contact Information</h5>
								<ul>
									<li>
										<span style="color:#1b98e0;">Name:</span>
										<span style="color:#13293d;">Ahmed Jamal<span>
									</li>
									<li>
									<span style="color:#1b98e0;">Email Address:</span>
									<span style="color:#13293d;">AhmedJamalAdmin@hotmail.com<span>
									</li>
									<li>
										<span style="color:#1b98e0;">Phone Number:</span>
										<span style="color:#13293d;">01233697445<span>
									</li>
									
								
								</ul>
							</div>
						
						</div>
					</div>

					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
							<div class="card-box height-100-p overflow-hidden">
								<div class="profile-tab height-100-p">
									<div class="tab height-100-p">
											
									<div class="tab-pane height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting">
												<form>
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20" style="color:#1c2d5e;">Edit Your Personal Setting</h4>
															<div class="form-group">
																<label class="editadmin">First Name</label>
																<input class="form-control form-control-lg"  name="firstname" type="text">
															</div>
															<div class="form-group">
																<label class="editadmin">Last Name</label>
																<input class="form-control form-control-lg" name="lastname" type="text">
															</div>
															<div class="form-group">
																<label class="editadmin">Email</label>
																<input class="form-control form-control-lg" name="email" type="text">
															</div>
															
															
															
														</li>
														<li class="weight-500 col-md-6">
															<br><br>
															
															<div class="form-group">
																<label class="editadmin">Mobile Number</label>
																<input class="form-control form-control-lg date-picker" name="mobile" type="text">
															</div>
															<div class="form-group">
																<label class="editadmin">Username</label>
																<input class="form-control form-control-lg" name="username" type="text">
															</div>
															<div class="form-group">
																<label class="editadmin">Password</label>
																<input class="form-control form-control-lg" name="password" type="email">
															</div>
															<input type="submit" class="button save" name="savebtn" value="Save changes">  <!-- To be edited with the form -->

															
														</li>
													</ul>
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
							
									
									</div>
								</div>
							</div>
				 	</div>

		    </div>
		

		</div>
			
		</div>
	</div>


    

</body>
</html>
