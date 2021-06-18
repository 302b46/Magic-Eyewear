<html>
<head>
	<title>shop by brand</title>
	<style>
	body{ 
	margin:0;
	font: 24px Tahoma,Geneva,sans-serif;
}

.content{
	text-align:center;
}

.categories{
	width:max-content;
	margin:30px;
	border:0px solid #184d47;
	border-radius:10px 10px 10px 10px;
	display:inline-block;
}

.categories:hover{
	box-shadow:0 0 10px 3px #184d47;
}

.image-item{
	height:200px;
	width:250px;
	font-weight:bold;
	padding:10px;
}

a{ 
	text-decoration:none;
}
	</style>

</head>
<body>
<?php  $this->view("includes/header",$data);?>   
<br><br><br><br><br><br>
   <center >
<h1> shop by brand  </h1> 
</center>
<div class="content">
			<div class="categories">
				<a href="#Ray-Ban.png" target="_blank" class="image-title">
				<img src="<?=ASSETS?>images/Ray-Ban.png" class="image-item"/>
				
			</div>	
		<a href="#armani" target="_blank">
			<div class="categories">
				<img src="<?=ASSETS?>images/armani.png" class="image-item"/>
				
			</div>
		</a> 
		<a href="#boss">
			<div class="categories">
				<img src="<?=ASSETS?>images/boss.jfif" class="image-item"/>
				
			</div>
		</a>
		<a href="#tommyhilfiger"> 
			<div class="categories">
				<img src="<?=ASSETS?>images/tommyhilfiger.jpg" class="image-item"/>
				
			</div>
			<a href="#Ralph-Lauren">
			<div class="categories">
				<img src="<?=ASSETS?>images/Ralph-Lauren.png" class="image-item"/>
				
			</div>
		</a>
			<a href="#PierreCardin">
			<div class="categories">
				<img src="<?=ASSETS?>images/PierreCardin.png" class="image-item"/>
				
			</div>
		</a>
		<a href="#seven">
			<div class="categories">
				<img src="<?=ASSETS?>images/seven.jpeg" class="image-item"/>
				
			</div>
		</a>
			<a href="#Polaroid">
			<div class="categories">
				<img src="<?=ASSETS?>images/Polaroid.png" class="image-item"/>
				
			</div>
		</a>
		</div>
		</body>
		<?php $this->view("includes/footer",$data);?>   
</html>