<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <link href="<?=ASSETS?>css/header.css" rel="stylesheet">


    
  </head>
  <body>
    <div class="container">
  <nav class="topNav navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=ROOT?>homepage"><img src="<?=ASSETS?>images/eyecare-logo.png" alt="EyeCare Optics Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top_navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="top_navbar">

      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=ROOT?>homepage">Home</a>
        </li>
      
        <!--Medical Glasses Dropdown  -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Medical Glasses
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <h5 class="dropdown-header">Shop by Gender</h5>
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

         <!--Sunlasses Dropdown  -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sunglasses
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Shop </a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         <!--Sports Glasses Dropdown  -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sports
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         <!--Brands Dropdown  -->
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?=ROOT?>ShopByBrand" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brands
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>guideHomepage"  data-toggle="tooltip" title="Know how to pick a frame suitable for your face!">Frame Guide</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>aboutus">About Us</a>
        </li> 
      </ul>

      <ul class="navbar-nav ms-auto">
      <?php if(!isset($_SESSION['userID'])): ?>
        <li class="nav-item"><a class="nav-link" href="<?=ROOT?>loginRegister"> Login | Signup </a></li>
      
        <?php else: ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle disable" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Hello, <?php echo $_SESSION['firstName'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li>
              <a class="dropdown-item" href="#"> 
                <i class="fa fa-user" style="font-size:24px"></i> Go To Profile</a>
            </li>
            <li><hr class="dropdown-divider"></li>

            <li>
              <a class="dropdown-item" href="<?=ROOT?>logout"> Logout</a>
            </li>
          </ul>
        </li>

          
            <li class="nav-item">
              <a class="nav-link" href="#">
              <i class="fa fa-shopping-cart" style="font-size:24px"></i>
              Cart
              </a></li>
        <?php endif; ?>

         



    	</ul>
     
    </div> <!-- End of navbar collapse -->
  </div> <!-- End of container fluid -->
</nav>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
  </body>
</html>