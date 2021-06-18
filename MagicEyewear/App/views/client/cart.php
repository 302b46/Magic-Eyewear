<?php $this->view("includes/header",$data);?>   

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>
    <link rel="stylesheet" href="<?=ASSETS?>css/cart.css">
<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>

  </head>
  <body class="skin-light">
    <!--Section: Block Content-->
  <section class="cart"> 
<div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="shadow p-3 mb-5 bg-white rounded col-lg-6" style="padding-right:100px; float:left;">

        <!-- Card -->
        <div class="mb-2">
          <div class="pt-4 wish-list">

            <h5 class="mb-4">Cart (<span>2</span> items)</h5>

            <div class="row mb-4" id="cartContent">
              <div class="col-md-5 col-lg-3 col-xl-3">
                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                  <img class="imgCart"
                    src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS A.jpg' alt="Sample">
                  
                </div>
              </div>
              <div class="col-md-7 col-lg-9 col-xl-9">
                <div>
                  <div class="d-flex justify-content-between">
                    <div >
                      <h5>DIVA Sunglasses</h5>
                      <p class="mb-3 text-muted text-uppercase small">Model</p>
                      <p class="mb-2 text-muted text-uppercase small">Color: Black</p>
                    </div>
                    
                      
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fi-xnsuxl-trash-solid"></i> Remove item </a>
                      
                    </div>
                    <p class="mb-0"><span><strong id="summary">1,780 EGP</strong></span></p class="mb-0">
                    <div class="quantity">
                      <form action="">
                          <select name="quantity" id="quantity" class="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="row mb-4">
              <div class="col-md-5 col-lg-3 col-xl-3">
                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                  <img class="img-fluid w-100"
                    src='<?=ASSETS?>Images/DIVA sunglasses/4165 40 C289 A.jpg' alt="Sample">
                  
                </div>
              </div>
              <div class="col-md-7 col-lg-9 col-xl-9">
                <div>
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5>DIVA Sunglasses</h5>
                      <p class="mb-3 text-muted text-uppercase small">Model</p>
                      <p class="mb-2 text-muted text-uppercase small">Color: Brown</p>
                    
                    </div>
                   
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i class="fi-xnsuxl-trash-solid"></i> Remove item </a>
                      
                    </div>
                    <p class="mb-0"><span><strong>1,500 EGP</strong></span></p class="mb-0">
                    <div class="quantity">
                      <form action="">
                          <select name="quantity" id="quantity" class="quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            

          </div>
        </div>
       

        <!--Grid column-->
      <div class="shadow p-3 mb-5 bg-white rounded col-lg-4" style=" float:right; margin-left:2%; height:280px; ">

<!-- Card -->
<div class="mb-3">
  <div class="pt-4">

    <h5 class="mb-3">Order Summary:</h5>

    <ul class="list-group list-group-flush">
      <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
        1x DIVA Sunglasses
        <span>1,780 EGP</span>
        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
        1x DIVA Sunglasses
        <span>1,500 EGP</span>
      </li>
      
      <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
        <div>
          <strong>Total Amount:</strong>
          
        </div>
        <span><strong>3,280 EGP</strong></span>
      </li>
    </ul>
    <div class="wrap">
    <button type="button" class="reserve" style="font-size:15px;">Reserve Products</button>

    </div>

  </div>
</div>
<!-- Card -->


</div>

      </div>
      <!--Grid column-->

      
      <!--Grid column-->

    </div>
    <!-- Grid row -->
    </div>
  </section>
  <!--Section: Block Content-->
  <?php $this->view("includes/Footer",$data);?>   

</body>
</html>
