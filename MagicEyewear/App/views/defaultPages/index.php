
<html>
    <head>
        <title><?php echo $data['page_title']?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="<?=ASSETS?>css/homepage-style.css">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>
    <body>

<?php  $this->view("includes/header",$data);?>   

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <!-- first slide -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?=ASSETS?>images/DIVA rosa.jpg" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
    <h3>We Sell Solutions Not Products</h3>
  </div>
    </div>
 <!-- second slide -->
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=ASSETS?>images/vto2.gif" alt="Second slide">
	  <div class="carousel-caption d-none d-md-block">
	  <h3>Meet Our Virtual Mirror</h3>
	  <h5> First Virtual Try-On Software in Egypt! </h5>
  </div>
    </div>
 <!-- third slide -->
    <div class="carousel-item">
      <img class="d-block w-100" src="<?=ASSETS?>images/faceshapes.jpg" alt="Third slide">
	  <div class="carousel-caption d-none d-md-block">
	  <h3>Discover the Best Eyewear for Your Face Shape</h3>
  </div>
    </div>

  </div>


  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<div class="middlepage1">

    <h2> Shop By Age Group </h2>

    <div style="clear: both">
        <h3 style="float: left">Adults</h3>
        <h3 style="float: right">Kids</h3>
    </div>

    <br>
    <br>

    <div class="btn_group">	
        <button class="btn-change" id="women" style=" width:50%; height:250px">SHOP WOMEN</button>
        <button class="btn-change" id="girls" style="width:50%; height:250px">SHOP GIRLS</button>
    </div>
    <div class="btn_group">	
        <button class="btn-change" id="men" style=" width:50%; height:250px">SHOP MEN</button>
        <button class="btn-change" id="boys" style="width:50%; height:250px">SHOP BOYS</button>
    </div>
    <hr>
</div>

<div class="middlepage2">
    <h1>ADS</h1>
</div>

<?php $this->view("includes/footer",$data);?>   

</body>
</html>