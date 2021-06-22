<?php $this->view("includes/header",$data);?>

<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>

    <link rel="stylesheet" href="<?=ASSETS?>css/clientProfile.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="margin-top:120px;">
<div class="row flex-lg-nowrap">
  

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h2 class="pt-sm-2 pb-1 mb-0 text-nowrap">Welcome, <?php echo $_SESSION['firstName'];?>!</h2>
                    
                  </div>
                  
                </div>
              </div>
              <div class="portlet-body">
                <div>
              <!-- Nav Tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" ><a data-toggle="tab" href="#edit" class="active nav-link" >Edit Profile</a></li>
                <li class="nav-item" ><a data-toggle="tab" href="#history" class="nav-link" >Order History</a></li>
              </ul>

              <!-- Tab Panes -->
              <div class="tab-content pt-3">

          <!-- Beginning of tab Edit Profile -->

                <div class="tab-pane active" id="edit">
                  <form class="form" action="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>First Name</label>
                              <input class="form-control" type="text" name="firstname" value="<?php echo $_SESSION['firstName'];?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input class="form-control" type="text" name="lastname" value="<?php echo $_SESSION['lastName'];?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="text" name="email" value="<?php echo $_SESSION['email'];?>" readonly>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <hr>
                   
                    <div class="row">
                      
                        <div class="col d-flex justify-content-end">
                        <button class="changePass" type="button" data-toggle="modal" data-target="#changePassModal">Change Password</button>
                        </div>
                        <div class="col d-flex justify-content-left">
                        <!-- <button class="saveChanges" type="button" data-toggle="modal" data-target="#saveModal">Save Changes</button> -->
                        <input type="submit" value="Save Changes" class="saveChanges" name="save">
                        </div>
                        <!-- Save Changes Modal -->
                        <div class="modal fade" tabindex="-1" role="dialog" id="saveModal">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Save Changes</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>Are you sure you want to save changes?</p>
                                </div>
                                <div class="modal-footer">
                                  
                                  <input type="submit" class="closeButton" data-dismiss="modal" name="close" value="Close">
                                  <input type="submit" class="save" name="save" value="Save">
                                  
                                  
                                </div>
                              </div>
                            </div>
                          </div> 
                          <!-- End of Save Changes Modal -->



                          <!-- Change Password Modal -->
                        <div class="modal fade" tabindex="-1" role="dialog" id="changePassModal">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Change Password</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <div class="form-group">
                                  <form action="">
                                      <input type="text" placeholder="Current Password" class="form-control"><br>
                                      <input type="text" placeholder="New Password" class="form-control"><br>
                                      <input type="text" placeholder="Confirm Password" class="form-control">
                                  </form>
                                </div>
                                  
                                </div>
                                <div class="modal-footer">
                                  <input type="reset" class="resetBtn" value="Reset" name="reset">
                                  <input type="submit" class="save" value="Save" name="savePass">
                                </div>
                              </div>
                            </div>
                          </div> 
                          <!-- End of Change Password Modal -->
                      
                    </div>
                  </form>

                </div>
                <!-- End of tab Edit Profile -->


                <!-- Beginning of tab Order History -->
                <div class="tab-pane" id="history">
                  <h2>Order History</h2>
                </div>
                <!-- End of tab Order History -->
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>

  </div>
</div>
</div>

<?php $this->view("includes/Footer",$data);?> 
</body>
</html>