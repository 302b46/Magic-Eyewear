<?php

class Client extends User 
{
    function addToCart()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'magic_eyewear');


        $database = new Database();
        if(isset($POST['addToCart-Gallery'])){
            $sql = "SELECT * FROM ordercart WHERE ClientID='$_SESSION[UserID]'";
            $query = $conn->query($sql);
        
            $id= array();
            $frame= array();
            $price=array();
            $r=1;
        
        
            while($row = $query->fetch_assoc()) {
        
                $id[$r]=$row["OrderID"];
                $frame[$r]=$row["FrameID"];
                $price[$r]=$row["TotalPrice"];
        
              $sql3=("INSERT INTO ordercart (FrameID, TotalPrice) VALUES ( '$frame', '$price')");
              $query3=mysqli_query($conn,$sql3);
              if (mysqli_query($conn, $sql3)){
                header("refresh:1; url=products.php");
                echo "Item added to cart successfully";
              }
              else{
                header("refresh:1; url=products.php");
                echo "Failed to add Item";
              }
            }
              $r++;
            }
          }
            
               
            
        
    }




?>