<?php  $this->view("includes/header",$data);?>   

<html>
    <head>
      <title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>

        <link rel="stylesheet" href="<?=ASSETS?>css/about-us.css">
        <link rel="stylesheet" href="<?=ASSETS?>css/guide.css">

    </head>
    <body>
<div class="scrolls">
  <div class="up"><span>↑</span>
    <div class="center"><span>mouse <br> scrolling</span></div>
  </div>
  <div class="down"><span>↓</span></div>
</div>
<div class="smooth">
  <div class="header">
    <ul>
      <li><a href="#who">Who Are We</a></li>
      <li><a href="#mission">Our Mission</a></li>
      <li><a href="#vision">Our Vision</a></li>
      <li><a href="#where">Where To Find Us</a></li>
      
    </ul>
  </div>
        <main>
            <div class="fixed-bg bg-1">
              <h1 class="main-text">EyeCare Optics</h1>
              <p class="sub-text">Not Just An Eyewear Company.</p>
            </div>
            <div class="fixed-bg bg-1-1">
              <div class="text-box">
                <h2>Who Are We?</h2>
                <p>
                    We, EyeCare Optics, are an eyewear startup company based in Cairo, Egypt.
                    We currently have one open branch inside of EyeCare Center, Maadi.
                </p>
              </div>
            </div>
            <div class="fixed-bg bg-2">
              <h1>Our Mission</h1>
            </div>
            <div class="fixed-bg bg-2-1">
              <div class="text-box">
                <h2>Our Mission</h2>

                <p>
                    Our aim is to provide all of our customers with a unique, personalized experience.
                    People often come to us unsure of which frame will fit them best, and always come out with a perfect
                    pair of glasses.
                </p>
                
              </div>
            </div>
            <div class="fixed-bg bg-3">
              <h1>Our Vision</h1>
            </div>
            <div class="fixed-bg bg-3-1">
              <div class="text-box">
                <h2>Our Vision</h2>
                <p>
                  He lives with his wife and their three grown-up children in a village called Trøllanes on the most northerly tip of the island. The village sits in a hollow, smoothly rounded by glacial ice. To get to the village you must drive through a narrow one-way
                  tunnel with no lighting. Before it was built in the 1970s the village could only be accessed by boat.
                </p>
                
              </div>
            </div>
            <div class="fixed-bg bg-4">
                <h1>Where To Find Us</h1>
              </div>
              <div class="fixed-bg bg-4-1">
                <div class="text-box">
                  <h2>Our Stores:</h2>
                  <p>
                    We currently only exist inside of EyeCare Center in Maadi. Come visit us! <a href="https://www.google.com/maps/dir//eyecare+center/@29.9592447,31.2521494,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x14584715f4f5825d:0x460b31b30854aa5e!2m2!1d31.2604238!2d29.9633895">Show Me The Way!</a>
                  </p>
                  
                </div>
              </div>
              <?php  $this->view("includes/footer",$data);?>  
          </main>


    </body>
   

</html>
