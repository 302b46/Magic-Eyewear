<?php $this->view("includes/header",$data);?>   

<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>
    <link rel="stylesheet" href="<?=ASSETS?>css/productPage.css">

    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Friconix -->
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb-pro.min.css">

  </head>

<body>
  <!--Section: Block Content-->
<section class="" id="productPage" style="align-content: center;">

<div class="container">

<div class="row" style="margin-top:150px; align-items:center; width:1300px;" >
  <div class="col-md-3 mb-4 mb-md-0">
    <div class="mdb-lightbox" style="height:530px;">
      <div class="row product-gallery mx-1">
     
      <div class="col-12 mb-0">
          <figure class="view overlay rounded z-depth-1 main-img">
            <a href="<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS A.jpg">
              <img src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS A.jpg'
                class="img-fluid z-depth-1">
            </a>
          </figure>
          <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
            <a href="<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS F.jpg">
            <img src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS F.jpg'
                  class="img-fluid">
            </a>
          </figure>
          
          
        </div>

    </div>

    <div class="col-12" style="margin-top:-500px;">
          <div class="row">
            <div class="col-3">
              <div class="view overlay rounded z-depth-1 gallery-item">
                <button><img src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS A.jpg'
                  class="img-fluid"></button>
                
                <div class="mask rgba-white-slight"></div>
              </div>
            </div>
            <div class="col-3">
              <div class="view overlay rounded z-depth-1 gallery-item">
              <button><img src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS F.jpg'
                  class="img-fluid"></button>
                <div class="mask rgba-white-slight"></div>
              </div>
            </div>
           
          </div>
        </div>
  </div>
</div>

<div class="col-md-7" id="productDesc">

<h5>DIVA Sunglasses</h5>
<p class="mb-2 text-muted text-uppercase small">Sunglasses</p>

<p><span class="mr-1"><strong>1,500 EGP</strong></span></p>
<p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
  error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
  officia quis dolore quos sapiente tempore alias.</p>
<div class="table-responsive">
  <table class="table table-sm table-borderless mb-0">
    <tbody>
      <tr>
        <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
        <td>5407X</td>
      </tr>
      <tr>
        <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
        <td>Black</td>
      </tr>

    </tbody>
  </table>
</div>
<hr>


<button type="button" class="tryOn"><i class="fi-xnluxl-robot-rounded"></i> Try-On</button>
<button type="button" class="addToCart"><i class="fi-xwsuhl-shopping-cart-solid"></i> Add to cart</button>
</div>
</div>
</div>

</section>
<!--Section: Block Content-->
<!-- Scripts & JQuery -->
<script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/popper.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/bootstrap.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/mdb.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/mdb.ecommerce.min.js"></script>

<?php $this->view("includes/Footer",$data);?>   

</body>
</html>