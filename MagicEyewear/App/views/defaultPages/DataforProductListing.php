<?php
 $host = "localhost";  
 $db_user = "root";  
 $db_pass = "";  
 $dbname = "magic_eyewear";  

 $connect = new PDO("mysql:host=$host; dbname=$dbname", $db_user, $db_pass); 
 //Database Connection

if(isset($_POST["action"]))
{
  $query = "
    SELECT * FROM frame";
  if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
  {
    $query .= "
     WHERE FramePrice BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
    ";
  }
  if(isset($_POST["brand"]))
  {
    $brand_filter = implode("','", $_POST["brand"]); //convert from array to string
    $query .= "
     AND FrameBrand IN('".$brand_filter."') 
    ";
  }
  if(isset($_POST["color"]))
  {
    $color_filter = implode("','", $_POST["color"]);
    $query .= "
     AND FrameColor IN('".$color_filter."')
    ";
  }
  if(isset($_POST["FrameShape"]))
  {
    $FrameShape_filter = implode("','", $_POST["FrameShape"]);
    $query .= "
     AND FrameShape IN('".$FrameShape_filter."')
    ";
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
               <img class="pic-2" src="https://www.freepnglogos.com/uploads/glasses-png/glasses-png-products-wisconsin-vision-20.png">
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
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
    //echo $query;
}

?>