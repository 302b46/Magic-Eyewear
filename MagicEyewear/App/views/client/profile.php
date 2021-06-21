<?php $this->view("includes/header",$data);?>

<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>

    <link rel="stylesheet" href="<?=ASSETS?>css/clientProfile.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">Welcome, Salma Ahmed!</h4>
                    <p class="mb-0">@salma22</p>
                   
                    
                  </div>
                  
                </div>
              </div>
              <div class="portlet-body">
                <div>
              <!-- Nav Tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a data-toggle="tab" href="" class="active nav-link">Edit Profile</a></li>
                <li class="nav-item"><a data-toggle="tab" href="" class="nav-link" >Order History</a></li>
              </ul>

              <!-- Tab Panes -->
              <div class="tab-content pt-3">
                <div class="tab-pane active" id="edit">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>First Name</label>
                              <input class="form-control" type="text" name="name" placeholder="Salma" value="Salma">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input class="form-control" type="text" name="last" placeholder="salma22" value="Ahmed">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="text" placeholder="salma@gmail.com" readonly>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input class="form-control" type="password" >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" ></div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="saveChanges" type="button" data-toggle="modal" data-target="#saveModal">Save Changes</button>
                        </div>
                        <!-- Modal -->
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
                                  
                                  <button type="button" class="closeButton" data-dismiss="modal">Close</button>
                                  <button type="button" class="save" data-dismiss="modal">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      
                    </div>
                  </form>

                </div>
                <div class="tab-pane" id="history"><h2>Order History</h2></div>
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
<?php //$this->view("includes/Footer",$data);?> 


<script type="text/javascript"></script>
<?php $this->view("includes/Footer",$data);?> 
</body>
</html>