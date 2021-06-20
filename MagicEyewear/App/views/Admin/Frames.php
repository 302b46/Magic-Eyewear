<?php  $this->view("includes/AdminDashboard",$data);?> 

<!-- Contains Frames and its functions (Add,Modify,Delete) -->

<html>
<body>


<div class="main-container">
        
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-50-p mb-30">
                <h3> Frames </h3><br>
                            <form method="post">
							<div class="btn-list">
								<a class=" btn-primary" data-toggle="modal" href="#" data-target="#AddFrame" type="button"><button id="add" class="button button1" >Add</button></a>
								<a class=" btn-primary" data-toggle="modal" href="#" data-target="#EditFrame" type="button"><button id="add" class="button button1" >Edit</button></a>
                                <a class=" btn-primary" data-toggle="modal" href="#" data-target="#confirmation-modal" type="button"><button id="add" class="button delete" >Delete</button></a>
								
							</div>
                            </form>
        
      <!-- Add Frame -->
					<div class="col-md-4 col-sm-12 mb-30">
							<div class="modal fade bs-example-modal-lg" id="AddFrame" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
                                        
											<h4 class="modal-title" id="myLargeModalLabel">Add Frame</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
                                        <form method="post">
                                            <div class="modal-body">
                                            <input type="text" class="form-control form-control-lg" placeholder="Code" name="code"> <br>
                                            <input type="text" class="form-control form-control-lg" placeholder="Brand Name" name="brandname"> <br>
                                            <select class="form-control form-control-lg" name="rim">
                                                        <option selected="">Rim</option>
                                                        <option value="1">Full Rim</option>
                                                        <option value="2">Semi Rimless</option>
                                                        <option value="2">Rimless</option>
                                                        
                                            </select> <br>
                                            <input type="text" class="form-control form-control-lg" placeholder="Size" name="size"> <br>
                                            
                                            <select class="form-control form-control-lg" name="color">
                                                        <option selected="">Color</option>
                                                        <option value="1">Black</option>
                                                        <option value="2">Gray</option>
                                                        <option value="2">Red</option>
                                                        <option value="2">Blue</option>
                                                        <option value="2">White</option>
                                                        <option value="2">Transparent</option> 
                                            </select> <br>
                                            <select class="form-control form-control-lg" name="feature">
                                                        <option selected="">Feature</option>
                                                        <option value="1">Diamond</option>
                                                        <option value="2">Heart-Shaped</option>
                                                        <option value="2">Oval</option>
                                                        <option value="2">Square</option>
                                                        <option value="2">Triangular</option>
                                                        <option value="2">Round</option>
                                            </select> <br>
                                            <input type="text" class="form-control form-control-lg" placeholder="Material" name="material"> <br>
                                            <select class="form-control form-control-lg" name="gender">
                                                        <option selected="">Gender</option>
                                                        <option value="1">Men</option>
                                                        <option value="2">Women</option>
                                            </select> <br>
                                            
                                            <select class="form-control form-control-lg" name="category">
                                                        <option selected="">Category</option>
                                                        <option value="1">Eyeglasses</option>
                                                        <option value="2">Sunglasses</option>
                                                        <option value="2">Sports</option>
                                            </select> <br>
                                            <input type="text" class="form-control form-control-lg" placeholder="Description" name="desc"> <br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="button delete" data-dismiss="modal">Close</button>
                                                <input type="submit" class="button save" value="Save changes">  <!-- To be edited with the form -->
                                        </form>
										</div>
									</div>
								</div>
							</div>
                             
                            
        <!-- Edit Modal -->
                    <div class="modal fade bs-example-modal-lg" id="EditFrame" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                
                                    <h4 class="modal-title" id="myLargeModalLabel">Edit Frame</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form method="post">
                                    <div class="modal-body">
                                    <input type="text" class="form-control form-control-lg" placeholder="Code" name="code"> <br>
                                    <input type="text" class="form-control form-control-lg" placeholder="Brand Name" name="brandname"> <br>
                                    <select class="form-control form-control-lg" name="rim">
                                                <option selected="">Rim</option>
                                                <option value="1">Full Rim</option>
                                                <option value="2">Semi Rimless</option>
                                                <option value="2">Rimless</option>
                                                
                                    </select> <br>
                                    <input type="text" class="form-control form-control-lg" placeholder="Size" name="size"> <br>
                                    
                                    <select class="form-control form-control-lg" name="color">
                                                <option selected="">Color</option>
                                                <option value="1">Black</option>
                                                <option value="2">Gray</option>
                                                <option value="2">Red</option>
                                                <option value="2">Blue</option>
                                                <option value="2">White</option>
                                                <option value="2">Transparent</option> 
                                    </select> <br>
                                    <select class="form-control form-control-lg" name="feature">
                                                <option selected="">Feature</option>
                                                <option value="1">Diamond</option>
                                                <option value="2">Heart-Shaped</option>
                                                <option value="2">Oval</option>
                                                <option value="2">Square</option>
                                                <option value="2">Triangular</option>
                                                <option value="2">Round</option>
                                    </select> <br>
                                    <input type="text" class="form-control form-control-lg" placeholder="Material" name="material"> <br>
                                    <select class="form-control form-control-lg" name="gender">
                                                <option selected="">Gender</option>
                                                <option value="1">Men</option>
                                                <option value="2">Women</option>
                                    </select> <br>
                                    
                                    <select class="form-control form-control-lg" name="category">
                                                <option selected="">Category</option>
                                                <option value="1">Eyeglasses</option>
                                                <option value="2">Sunglasses</option>
                                                <option value="2">Sports</option>
                                    </select> <br>
                                    <input type="text" class="form-control form-control-lg" placeholder="Description" name="desc"> <br>
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

			</div>

     
        <table class="styled-table">
    
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
                <th>Size</th>
                <th>Color</th>
                <th>Rim</th>
                <th>Feature</th>
                <th>Material</th>
                <th>Gender</th>
                <th>Category</th>
                <th>Description</th>
                <th></th> <!-- Checkbox -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>7</td>
                <td>E</td>
                <td>RayBan</td>
                <td>6000</td>
                <td>20</td>
                <td>Black</td>
                <td>FullRim</td>
                <td>Round</td>
                <td>Metal</td>
                <td>Men</td>
                <td>Eyeglasses</td>
                <td>OK</td>
                <td><input type="checkbox" id="check" name="checkframe" ></td>
            </tr>
            <tr>
                <td>8</td>
                <td>E</td>
                <td>Tommy Hilfiger</td>
                <td>7000</td>
                <td>20</td>
                <td>Navy</td>
                <td>FullRim</td>
                <td>Round</td>
                <td>Metal</td>
                <td>Women</td>
                <td>Eyeglasses</td>
                <td>OK</td>
                <td><input type="checkbox" id="check" name="checkframe" ></td>
            </tr>
        </tbody>
    </table>
        </div>
        </div>
    </div>



</body>
</html>