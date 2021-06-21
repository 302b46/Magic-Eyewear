<html>
<head>
	<title>shop by brand</title>
<link rel="stylesheet" href="<?=ASSETS?>css/brand.css">

</head>
<body>
<?php  $this->view("includes/header",$data);?>   
<br><br><br><br><br><br>
   <center >
<h1> shop by brand  </h1> 
</center>

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
	<img src="<?=ASSETS?>images/'.$row['BrandImage'].'" class="image-item"/>
</div>
';
}
echo $output;
*/
?>
 



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