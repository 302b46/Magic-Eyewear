<html>
<title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>
<link rel="stylesheet" href="<?=ASSETS?>css/brand.css">

</head>
<body>
<?php  $this->view("includes/header",$data);?>   
<br><br><br><br><br><br>
   <center >
<h1> shop by brand  </h1> 
</center>

<div class="content">
<?php

//echo $this->model("models/Filters",$output);

/*
echo $this->model->ViewAllBrands();
$str = '';
$str.='<h5>movie: '.$this->model->ViewAllBrands().'</h5>';
$str.='<div class="content">';
$str.='<div class="categories">';
$str.='<a href="brandproducts.php?brandname=<?php echo $row[0]["BrandName"]; ?>"  class="image-title">';
$str.='<img src="<?php echo $row[0]["BrandImg"]; ?>"  class="image-item"/>';
$str.='</div>';
echo $str;
	
$result = $this->model->ShopBrands();
foreach($result as $row)
    {
    	echo $row['BrandImage'];
		echo "<br>";
    }

$model= new Filter;
$model->ViewAllBrands()->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
$output .= '
<div class="content">
<div class="categories">
	<a href="" target="_blank" class="image-title">
	<img src="<?=ASSETS?>'.$this->model->ViewAllBrands().'" class="image-item"/>
</div>
';
*/
$output='';
 if(is_array($data['brandss'])){
          
	 foreach($data['brandss'] as $row){

		$output .=' 
		<div class="categories">
			<a href="" target="_blank" class="image-title"> 
			<img src="'.$row->BrandImg.'"  class="image-item"/>
		</div>';

	}
	}
echo $output;

?>

<!--
$output='';
 if(is_array($data['brandss'])){
          
	 foreach($data['brandss'] as $row){

		?>
		<div class="categories">
			<a href="" target="_blank" class="image-title"> 
			<img src=// echo '".$row."';   class="image-item"/>
		</div>

	}
	}
//echo $output;

?>
-->
 </div>


<!--
<div class="content">
			<div class="categories">
				<a href="#Ray-Ban.png" target="_blank" class="image-title">
				<img src="//ASSETSimages/Ray-Ban.png" class="image-item"/>
			</div>	

		<a href="#armani" target="_blank">
			<div class="categories">
				<img src="//ASSETSimages/armani.png" class="image-item"/>
				
			</div>
		</a> 
		<a href="#boss">
			<div class="categories">
				<img src="//ASSETSimages/boss.jfif" class="image-item"/>
				
			</div>
		</a>
		<a href="#tommyhilfiger"> 
			<div class="categories">
				<img src="//ASSETSimages/tommyhilfiger.jpg" class="image-item"/>
				
			</div>
			<a href="#Ralph-Lauren">
			<div class="categories">
				<img src="//ASSETSimages/Ralph-Lauren.png" class="image-item"/>
				
			</div>
		</a>
			<a href="#PierreCardin">
			<div class="categories">
				<img src="//ASSETSimages/PierreCardin.png" class="image-item"/>
				
			</div>
		</a>
		<a href="#seven">
			<div class="categories">
				<img src="//ASSETSimages/seven.jpeg" class="image-item"/>
				
			</div>
		</a>
			<a href="#Polaroid">
			<div class="categories">
				<img src="ASSETSimages/Polaroid.png" class="image-item"/>
			</div>
		</a>

		</div>
-->
		</body>
		<?php $this->view("includes/footer",$data);?>   
</html>