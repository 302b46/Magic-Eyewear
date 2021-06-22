<?php  $this->view("includes/AdminDashboard",$data);?> 

<!-- Contains Frames and its functions (Add,Modify,Delete) -->

<html>
<body>
<?php    $pdo = new PDO("mysql:host=localhost;dbname=magic_eyewear","root","");  ?>

<div class="main-container">
        
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-50-p mb-30">
                <h3> Users </h3> <br>
                <form method="post">
                    <div class="btn-list">
                        <a class=" btn-primary" data-toggle="modal" href="#" data-target="#AddUser" type="button"><button id="add" class="button button1" >Add</button></a>
                        
                        
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
                                    
                                    <input type="text" class="form-control form-control-lg" placeholder="First Name" name="firstname"> <br>
                                    
                                    <input type="text" class="form-control form-control-lg" placeholder="Last Name" name="lastname"> <br>
                                    
                                    <input type="text" class="form-control form-control-lg" placeholder="Password" name="pass"> <br> 
                                   
                                    <input type="text" class="form-control form-control-lg" placeholder="Email" name="email"> <br>
                                    <select class="form-control form-control-lg" name="usertype">
                                                        <option selected="">User Type</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Client</option>
                                                        
                                            </select> <br>
                                    
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="button delete" data-dismiss="modal">Close</button>
                                                <input type="submit" name="adduser" class="button save" value="Save changes">  <!-- To be edited with the form -->
                                </form>
                                <?php 
                                    // Insert User
                                    if(isset($_POST["adduser"])){
                                        $fname = $_POST["firstname"];
                                        $lname = $_POST["lastname"];
                                        $email = $_POST["email"];
                                        $usertype = $_POST["usertype"];
                                        $pass=$_POST["pass"];
                                        $sql = "INSERT into user(FirstName,LastName,Email,Password,UserType)
                                        VALUES(:f,:l,:e,:p,:u)";
                                        $data = [
                                            'f' => $fname,
                                            'l' => $lname,
                                            'e' => $email,
                                            'p' =>$pass,
                                            'u' => $usertype,
                                        ];
                                        $r = $pdo->prepare($sql);
                                        $r ->execute($data);
                                    }
                                ?>
                                
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
                
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>User Type</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * from user";
                $d =$pdo -> query($query);
                foreach($d as $data){
            ?>
            <tr>
                <td><?php echo $data["UserID"] ?></td>
                <td><?php echo $data["FirstName"]; ?></td>
                <td><?php echo $data["LastName"]; ?></td>
                <td><?php echo $data["Email"] ?></td>
                <td><?php echo $data["Password"] ?></td>
                <td><?php 
                if($data["UserType"]  ==2) echo "Client";
                else echo "Admin"; ?></td>
                <td><input type="submit" id="<?php echo $data['UserID'];?>" name="delete" value="delete"></a></td>
            </tr>
            <?php } ?>
            <?php
                if(isset($_POST["delete"])){
                    $id = $_POST["UserID"];
                    //$sql = "DELETE from user WHERE UserID=.$id.";
                    $count=$dbo->prepare("DELETE FROM user WHERE id=:id");
                    $count->bindParam(":id",$id,PDO::PARAM_INT);
                    $count->execute();
                }
            ?>
        </tbody>
    </table>
        </div>
        </div>
    </div>





</body>
</html>