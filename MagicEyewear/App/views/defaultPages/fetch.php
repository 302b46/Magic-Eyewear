<?php
 $host = "localhost";  
 $db_user = "root";  
 $db_pass = "";  
 $dbname = "magic_eyewear";  

 $connect = new PDO("mysql:host=$host; dbname=$dbname", $db_user, $db_pass); 
 //$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

 //Database Connection

if(isset($_POST["action"]))
{
  $query = "
    SELECT * FROM frame";
  $and_v = " WHERE ";
  if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
  {
    $query .= $and_v."
      FramePrice BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
    ";
    $and_v = " AND ";
  }
  if(isset($_POST["gender"]))
  {
    $gender_filter = implode("','", $_POST["gender"]); //convert from array to string
    $query .= $and_v." AssignedGender IN(SELECT GenderID FROM gender WHERE GenderType IN( '".$gender_filter."'))
    ";
    $and_v = " AND ";
  }
  if(isset($_POST["frametype"]))
  {
    $frametype_filter = implode("','", $_POST["frametype"]); //convert from array to string
    $query .= $and_v." FrameType IN(SELECT FrameTypeID FROM frametype WHERE TypeName IN( '".$frametype_filter."'))
    ";
    $and_v = " AND ";
  }
  if(isset($_POST["brand"]))
  {
    $brand_filter = implode("','", $_POST["brand"]); //convert from array to string
    $query .= $and_v." FrameBrand IN(SELECT BrandID FROM brand WHERE BrandName IN( '".$brand_filter."'))
    ";
    $and_v = " AND ";
  }
  if(isset($_POST["color"]))
  {
    $color_filter = implode("','", $_POST["color"]);
    $query .= $and_v." FrameColor IN(SELECT ColorID FROM color WHERE ColorName IN( '".$color_filter."'))
    ";
    $and_v = " AND ";

  }
  if(isset($_POST["frameshape"]))
  {
    $FrameShape_filter = implode("','", $_POST["frameshape"]);
    $query .= $and_v." FrameShape IN(SELECT FrameShapeID FROM frameshape WHERE FrameShapeName IN('".$FrameShape_filter."'))
    ";
    $and_v = " AND ";

  }


  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();
  $output = '';
  if($total_row > 0)
  {
    foreach($result as $row)
    {
      $output .= '
   <div class="col-md-4 col-sm-6">
   <div class="product-grid">
       <div class="product-image4">
           <a href="#">
               <img class="pic-1" src="'. $row['FrameImage'] .'">
               <img class="pic-2" src="https://i.ibb.co/z2BxJ2D/frame123.jpg">
           </a>
           <ul class="social">
               <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
               <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
           </ul>
           
       </div>
       <div class="product-content">
           <h3 class="title"><a href="#">' . $row['FrameDescription'] . '</a></h3>
           <div class="price">' . $row['FramePrice'] . ' EGP</div>
           
           <a class="add-to-cart" href="">ADD TO CART</a>
       </div>
   </div>
</div>';
        }
    } else {
        $output = '<h3>No Frames Found</h3>';
    }
    echo $output;
    //echo $query;
}

?>