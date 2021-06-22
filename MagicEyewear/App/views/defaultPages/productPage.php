<?php $this->view("includes/header",$data);?>   
<br><br>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>
    <link rel="stylesheet" href="<?=ASSETS?>css/productPage.css">
    <link rel="stylesheet" href="<?=ASSETS?>css/imageModal.css">

    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Friconix -->
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

  <!-- Slider CSS -->
	<link rel="stylesheet" href="<?=ASSETS?>css/productSlider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?=ASSETS?>css/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="<?=ASSETS?>js/productSlider/modernizr.js"></script>

  </head>

<body style="background-color:none;">
  <!--Section: Block Content-->
<section class="" id="productPage" style="align-content: center;">

<div class="container" style="margin-bottom:70px;">

<div id="main" role="main" style="width:400px;margin-top:-10px; height:420px; border-radius:2%;margin-bottom: 10px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2);">
      <section class="slider" style="padding:10px;">
        <div id="slider" class="flexslider" style=" height:210px; ">
        
        <ul class="slides">
            <li>
  	    	    <img src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS A.jpg' class="productImg" id="productImg" style=" width:368px;">
  	    		</li>
  	    	
  	    		<li>
  	    	    <img src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS F.jpg' class="productImg" id="productImg" style=" width:368px;">
  	    		</li>
          </ul>
        
          
          
        </div>
        <hr>
        <ul class="flex-direction-nav">
          <li class="flex-nav-prev">
            <a class="flex-prev" href="#">Previous</a>
          </li>
          <li class="flex-nav-next">
            <a class="flex-next" href="#">Next</a>
          </li>
        </ul>
        <div id="carousel" class="flexslider">
          <ul class="slides" style=" height:100px;">
          <li>
  	    	    <img src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS A.jpg'  style=" width:150px;">
  	    		</li>
  	    		<li>
  	    	    <img src='<?=ASSETS?>Images/DIVA sunglasses/4162 40 C97AS F.jpg' style=" width:150px;">
  	    		</li>
  
          </ul>
        </div>
      </section>
</div>
<div class="col-md-7" id="productDesc">

<h5>DIVA Sunglasses</h5>
<p class="mb-2 text-muted text-uppercase small">Sunglasses</p>

<p><span class="mr-1"><strong>1,500 EGP</strong></span></p>
<p class="pt-1"><?=$_POST['desc']?></p>
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
<button type="button" id="tryon" onclick='' class="tryOn"><i class="fi-xnluxl-robot-rounded"></i> Try-On</button>
<button type="button" class="addToCart"><i class="fi-xwsuhl-shopping-cart-solid"></i> Add to cart</button>
</div>

</div>

  <!-- Enlarge on click Modal -->
<div id="productModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img">
  <div id="caption"></div>
</div>

</section>
<!--Section: Block Content-->
<!-- Scripts & JQuery -->
<script type="text/javascript">
    document.getElementById("tryon").onclick = function () {
        location.href = "<?=ROOT?>tryon";
    };
</script>
<script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://mdbootstrap.com/previews/ecommerce-demo/js/bootstrap.js"></script>


  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  
 <!-- FlexSlider -->
 <script defer src="<?=ASSETS?>js/productSlider/jquery.flexslider.js"></script>
<!-- Syntax Highlighter -->
<script type="text/javascript" src="<?=ASSETS?>js/productSlider/shCore.js"></script>
  <script type="text/javascript" src="<?=ASSETS?>js/productSlider/shBrushXml.js"></script>
  <script type="text/javascript" src="<?=ASSETS?>js/productSlider/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="<?=ASSETS?>js/productSlider/jquery.easing.js"></script>
  <script src="<?=ASSETS?>js/productSlider/jquery.mousewheel.js"></script>
  <script defer src="<?=ASSETS?>js/productSlider/slider.js"></script>
  <script src="<?=ASSETS?>js/productSlider/flexSlider.js"></script>
  <script src="<?=ASSETS?>js/productModal.js"></script>

<?php $this->view("includes/Footer",$data);?>   

</body>
</html>