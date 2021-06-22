<?php  $this->view("includes/header",$data);?>   

<!doctype html>
<html>
    <head>
	<title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="<?=ASSETS?>css/tryon.css">
       
    </head>
    <body>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- three.js r54 -->
        <script src="<?=ASSETS?>js/tryon/three.js"></script>
        <!-- clmtrack -->
        <script src="<?=ASSETS?>js/tryon/utils.js"></script>
        <script src="<?=ASSETS?>js/tryon/clmtrackr.js"></script>
		<script src="<?=ASSETS?>js/tryon/tryon.js"></script>

        <div id="tryon">
            <video id="camera" loop></video>
            <canvas id="overlay"></canvas>
        </div>
        <div class="goBack">
        <button id="backBtn">Go Back</button>
        </div>
		<div class="buttons">
        <!-- <button >Try On</button> &nbsp; <button >End Try On</button> -->
            <div class="btn-group-vertical">
                <button type="button" id="previous" class="btn" onclick="history.back(-1)"><i style="font-size:18px"class="fa fa-arrow-circle-left"></i> Go Back</button>
                <button type="button" id="tryonBtn" class="btn"><i class="fa fa-camera"></i> Try On</button>
                <button type="button" onclick="javascript:document.location.reload()" id="end" class="btn"><i class="fa fa-power-off"></i> Turn Off</button>
            </div>
        </div>
        <div id="debug"></div>

        <script>
        
            
        </script>
    </body>
</html>