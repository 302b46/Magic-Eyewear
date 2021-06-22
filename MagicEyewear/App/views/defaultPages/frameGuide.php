<?php  $this->view("includes/header",$data);?>   

<html>
<head>
<title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>
<link rel="stylesheet" href="<?=ASSETS?>css/guide.css">

</head>

<body class="guide-body">
  
  
<div class="scrolls">
  <div class="up"><span>↑</span>
    <div class="center"><span>mouse <br> scrolling</span></div>
  </div>
  <div class="down"><span>↓</span></div>
</div>
<div class="smooth">
  <div class="header">
    <ul>
      <li><a href="#home">Guide Home</a></li>
      <li><a href="#face">Face Guide</a></li>
      <li><a href="#heart">Heart Face</a></li>
      <li><a href="#oval">Oval Face</a></li>
      <li><a href="#round">Round Face</a></li>
      <li><a href="#square">Square Face</a></li>
      <li><a href="#triangular">Triangular Face</a></li>


 
    </ul>
  </div>
  <section class="start" id="home">
    <h2>The Ultimate Face Guide</h2>
  </section>
  <section class="section-content">
    <div class="section-details">
      <p>
      Two factors to take into consideration when shopping for frames are face shape and frame shape.
      We believe you should wear whatever makes you feel comfortable, but for those of you who can’t figure
      out why some pairs of glasses look better than others, we want to provide some insight on this face shape and frame shape dynamic.
      </p>
  </div>
  </section>

  <section id="face">
    <h2>Finding Your Face Shape</h2>
  </section>

  <section class="section-content">
    <div class="section-details">
    <p>The first step towards finding the perfect pair of glasses is to find your face shape. Because every face is unique in the angles and lines that make up the face, try to pick the shape that most strongly resembles your face. The four most common face shapes are square, oval, heart, and round face shapes.</p>

    </div>
  </section>

  <section class="shapes" id="heart">
    <h2>The Heart-Shaped Face</h2>
  </section>
  <section class="section-content">
    <div class="section-details">
 
    <h3>Your Face Is Heart-Shaped If You Have:</h3>
    <ol>
      <li class="features">A Broad forehead</li>
      <li class="features">High and defined cheekbones</li>
      <li class="features">A Small chin</li>
    </ol>

    <h3>Recommended Frame Shape:</h3>
    <h5>The Cat-Eye</h5>
    <a href="<?=ROOT?>products" class="button">Shop Now</a>

    </div>
    
  </section>

  


  <section class="shapes" id="oval">
    <h2>The Oval Face</h2>
  </section>

  <section class="section-content">
  <div class="section-details">

  <h3>Your Face Is Oval If You Have:</h3>
    <ol>
      <li class="features">Softly rounded</li>
      <li class="features">Evenly proportioned</li>
    </ul>

    <h3>Recommended Frame Shape:</h3>
    <h5>Geometric shapes (square or rectangular)</h5>
    <a href="<?=ROOT?>products" class="button">Shop Now</a>

</div>
  </section>

  <section class="shapes" id="round">
    <h2>The Round Face</h2>
  </section>

  <section class="section-content">
    <div class="section-details">
  <h3>Your Face Is Round If You Have:</h3>

    <ol>
      <li class="features">Width & length similarly proportionate</li>
      <li class="features">Fuller cheekbones</li>
      <li class="features">Little to no angles</li>
    </ol>

    <h3>Recommended Frame Shape:</h3>
    <h5>Rectangular</h5>
    <a href="<?=ROOT?>products" class="button">Shop Now</a>

</div>
  </section>

  <section class="shapes" id="square">
    <h2>The Square Face</h2>
  </section>

  <section class="section-content">
  <div class="section-details">
  <h3>Your Face Is Oval If You Have:</h3>
    <ol>
      <li class="features">Broad deep forehead</li>
      <li class="features">Square chin</li>
      <li class="features">Wide jaw</li>
    </ol>

    <h3>Recommended Frame Shape:</h3>
    <h5>Round or oval</h5>
    <a href="<?=ROOT?>products" class="button">Shop Now</a>

</div>
  </section>

  <section class="shapes" id="triangular">
    <h2>The Triangular Face</h2>
  </section>

  <section class="section-content">
  <div class="section-details">
  <h3>Your Face Is Oval If You Have:</h3>
    <ol>
      <li class="features">A Narrow at the forehead</li>
      <li class="features">Wider at the cheek and chin area</li>
    </ol>

    <h3>Recommended Frame Shape:</h3>
    <h5>Aviators or Cat-Eye</h5>
    <a href="<?=ROOT?>products" class="button">Shop Now</a>

    <button></button>
</div>
  </section>
 
</div>
  




<?php  $this->view("includes/footer",$data);?>  



</body>
</html>