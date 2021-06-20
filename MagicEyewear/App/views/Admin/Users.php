<?php  $this->view("includes/AdminDashboard",$data);?> 

<!-- Contains Frames and its functions (Add,Modify,Delete) -->

<html>
<body>


<div class="main-container">
        
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-50-p mb-30">
                <h3> Users </h3> <br>
                <form method="post">
                    <div class="btn-list">
                        <a class=" btn-primary" data-toggle="modal" href="#" data-target="#AddUser" type="button"><button id="add" class="button button1" >Add</button></a>
                        <a class=" btn-primary" data-toggle="modal" href="#" data-target="#confirmation-modal" type="button"><button id="add" class="button delete" >Delete</button></a>
                        
                    </div>
                </form>
						
            <!-- Add user modal -->
                <div class="modal fade bs-example-modal-lg" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Add user</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
                                        <form method="post">
                                    <div class="modal-body">
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="username"> <br>
                                    <input type="text" class="form-control form-control-lg" placeholder="First Name" name="firstname"> <br>
                                    
                                    <input type="text" class="form-control form-control-lg" placeholder="Last Name" name="lastname"> <br>
                                    
                                    
                                   
                                    <input type="text" class="form-control form-control-lg" placeholder="Email" name="email"> <br>
                                    
                                    <input type="text" class="form-control form-control-lg" placeholder="Mobile Number" name="mobilenumber"> <br>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="button delete" data-dismiss="modal">Close</button>
                                                <input type="submit" class="button save" value="Save changes">  <!-- To be edited with the form -->
                                </form>
										</div>
									</div>
								</div>
							</div>
                <!-- Delete Confirmation Modal -->
                <div class="col-md-4 col-sm-12 mb-30">
							<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body text-center font-18">
											<h4 class="padding-top-30 mb-30 weight-500">Are you sure you want to delete this frame?</h4>
											<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
												<div class="col-6">
													<button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
													NO
												</div>
												<div class="col-6" >
													<button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" style="background-color:#1c2d5e; border-color:#1c2d5e;"  data-dismiss="modal"><i class="fa fa-check"></i></button>
													YES
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
				</div>

        <table class="styled-table">
    
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>7899</td>
                <td>Ahmed123</td>
                <td>Ahmed</td>
                <td>Yasser</td>
                <td>AhmedY123@yahoo.com</td>
                <td>01032664890</td>
                <td><input type="checkbox" id="check" name="checkframe" ></td>
                
            </tr>
            <tr>
                <td>7800</td>
                <td>Malak11</td>
                <td>Malak</td>
                <td>Abdallah</td>
                <td>Malak_Abdallah@yahoo.com</td>
                <td>01137644100</td>
                <td><input type="checkbox" id="check" name="checkframe" ></td>
            </tr>
        </tbody>
    </table>
        </div>
        </div>
    </div>





</body>
</html>