<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title></title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <link href='<?=ASSETS?>css/shop.css' rel='stylesheet'>
        <script type='text/javascript' src='<?=ASSETS?>js/shop.js'></script>
    </head>
<body oncontextmenu='return false' class='snippet-body'>
<?php  $this->view("includes/header",$data);?>   

    <div class="container">
        <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header">
            <button class="btn btn-hide text-uppercase" type="button" data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" id="filter-btn" onclick="changeBtnTxt()"> 
                    <span class="fas fa-angle-left" id="filter-angle"></span> 
                    <span id="btn-txt">Hide filters</span> 
            </button>
            <nav class="navbar navbar-expand-lg navbar-light pl-lg-0 pl-auto"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation" onclick="chnageIcon()" id="icon"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="navbar-nav d-lg-flex align-items-lg-center">
                        <li class="nav-item active">
                         <select name="sort" id="sort">
                            <option value="" hidden selected>Sort by price</option>
                            <option value="lowhigh">lowest to highest</option>
                            <option value="highlow">highest to lowest </option>
                         </select> 
                        </li>
                    </ul>
            </div>
            </nav>
        
    </div>
    <div id="content" class="my-5">
        <div id="filterbar" class="collapse">
            <div class="box border-bottom">
                <div class="form-group text-center">
                    <div class="btn-group" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="radio"> Reset </label> <label class="btn btn-success form-check-label active"> <input class="form-check-input" type="radio" checked> Apply </label> </div>
                </div>
                
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Gender <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box" aria-expanded="false" aria-controls="inner-box" id="out" onclick="outerFilter()"> <span class="fas fa-plus"></span> </button> </div>
                <div id="inner-box" class="collapse mt-2 mr-1">
                    <div class="my-1"> <label class="tick">Women <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Men <input type="checkbox" > <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Girls <input type="checkbox"checked> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Boys <input type="checkbox" > <span class="check"></span> </label> </div>
                </div>
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">Brand <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#inner-box2" aria-expanded="false" aria-controls="inner-box2"><span class="fas fa-plus"></span></button> </div>
                <div id="inner-box2" class="collapse mt-2 mr-1">
                    <div class="my-1"> <label class="tick">Brand1 <input type="checkbox" checked="checked"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Brand2 <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Brand3 <input type="checkbox" checked> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Brand4 <input type="checkbox"> <span class="check"></span> </label> </div>
                    <div class="my-1"> <label class="tick">Brand4 <input type="checkbox"> <span class="check"></span> </label> </div>
                </div>
            </div>
            <div class="box border-bottom">
                <div class="box-label text-uppercase d-flex align-items-center">price <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#price" aria-expanded="false" aria-controls="price"><span class="fas fa-plus"></span></button> </div>
                <div class="collapse" id="price">
                    <div class="middle">
                        <div class="multi-range-slider"> <input type="range" id="input-left" min="0" max="100" value="10"> <input type="range" id="input-right" min="0" max="100" value="50">
                            <div class="slider">
                                <div class="track"></div>
                                <div class="range"></div>
                                <div class="thumb left"></div>
                                <div class="thumb right"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <div> <span id="amount-left" class="font-weight-bold"></span> EGP </div>
                        <div> <span id="amount-right" class="font-weight-bold"></span> EGP </div>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-label text-uppercase d-flex align-items-center">Color <button class="btn ml-auto" type="button" data-toggle="collapse" data-target="#size" aria-expanded="false" aria-controls="size"><span class="fas fa-plus"></span></button> </div>
                <div id="size" class="collapse">
                    <div class="btn-group d-flex align-items-center flex-wrap" data-toggle="buttons">
                     <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox"> red </label>
                      <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> black </label> 
                      <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> white </label>  
                    </div>
                </div>
            </div>
        </div>
        <div id="products">
            <div class="row mx-0">
               
            <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                    <a href="<?=ROOT?>productPage" style="text-decoration: none;">
                        <div class="product-name text-center">hena</div>
                        <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png" alt=""> </div>
                        <div class="card-body pt-5">
                            <div class="text-muted text-center mt-auto">Available Colors</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-dark border form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center price">
                                <div class="font-weight-bold">900 EGP</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                    <a href="<?=ROOT?>productPage" style="text-decoration: none;">
                        <div class="product-name text-center">hena</div>
                        <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png" alt=""> </div>
                        <div class="card-body pt-5">
                            <div class="text-muted text-center mt-auto">Available Colors</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-dark border form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center price">
                                <div class="font-weight-bold">900 EGP</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                    <a href="<?=ROOT?>productPage" style="text-decoration: none;">
                        <div class="product-name text-center">hena</div>
                        <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png" alt=""> </div>
                        <div class="card-body pt-5">
                            <div class="text-muted text-center mt-auto">Available Colors</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-dark border form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center price">
                                <div class="font-weight-bold">900 EGP</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                    <a href="<?=ROOT?>productPage" style="text-decoration: none;">
                        <div class="product-name text-center">hena</div>
                        <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png" alt=""> </div>
                        <div class="card-body pt-5">
                            <div class="text-muted text-center mt-auto">Available Colors</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-dark border form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center price">
                                <div class="font-weight-bold">900 EGP</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                    <a href="<?=ROOT?>productPage" style="text-decoration: none;">
                        <div class="product-name text-center">hena</div>
                        <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png" alt=""> </div>
                        <div class="card-body pt-5">
                            <div class="text-muted text-center mt-auto">Available Colors</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-dark border form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center price">
                                <div class="font-weight-bold">900 EGP</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                    <a href="<?=ROOT?>productPage" style="text-decoration: none;">
                        <div class="product-name text-center">hena</div>
                        <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png" alt=""> </div>
                        <div class="card-body pt-5">
                            <div class="text-muted text-center mt-auto">Available Colors</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-dark border form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center price">
                                <div class="font-weight-bold">900 EGP</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                    <a href="<?=ROOT?>productPage" style="text-decoration: none;">
                        <div class="product-name text-center">hena</div>
                        <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png" alt=""> </div>
                        <div class="card-body pt-5">
                            <div class="text-muted text-center mt-auto">Available Colors</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-dark border form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center price">
                                <div class="font-weight-bold">900 EGP</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

                
                
                <div class="col-lg-4 col-md-6 pt-md-4 pt-3">
                    <div class="card d-flex flex-column align-items-center">
                    <a href="<?=ROOT?>productPage" style="text-decoration: none;">
                        <div class="product-name text-center">hena</div>
                        <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png" alt=""> </div>
                        <div class="card-body pt-5">
                            <div class="text-muted text-center mt-auto">Available Colors</div>
                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip" data-placement="right" title="choose color"> <label class="btn btn-dark border form-check-label"> <input class="form-check-input" type="radio" autocomplete="off"> </label> <label class="btn btn-orange form-check-label active"> <input class="form-check-input" type="radio" autocomplete="off"> </label> </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center price">
                                <div class="font-weight-bold">900 EGP</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                 
                                </body>
                                <?php  $this->view("includes/footer",$data);?> 
                            </html>
                             