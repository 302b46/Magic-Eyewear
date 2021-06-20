<?php  $this->view("includes/header",$data);?>   

<html>
<head>
<title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>

</head>
<body>
<br>
<br><br>
<div class="container">
  <h2>Toggleable Tabs</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#diamond">Diamond</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#heart">Heart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#oval">Oval</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#square">Square</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#triangular">Triangular</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Face Guide</h3>
      <p>Need or want a pair of glasses but can't pick one suitable for your face shape? Look no more, this is a brief guide on how to find the best-fit frame. </p>
    </div>
    <div id="diamond" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="heart" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="oval" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="square" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="triangular" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>
  
  
  

</body>
</html>