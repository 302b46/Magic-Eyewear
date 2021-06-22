<?php  $this->view("includes/AdminDashboard",$data);?> 


<html>
<body>

<?php    $pdo = new PDO("mysql:host=localhost;dbname=magic_eyewear","root","");  ?>

<div class="main-container">
        
        <div class="pd-ltr-20">
            <div class="card-box pd-20 height-50-p mb-30">
                <h3> Orders </h3>
        
        
     
        <table class="styled-table">
    
        <thead>
            <tr>
                
                <th>OrderID</th>
                <th>ClientID</th>
                <th>Frame Id</th>
                <th>Total Price</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                $query = "SELECT * from ordercart";
                $d =$pdo -> query($query);
                foreach($d as $data){
            ?>
                
                <td><?php echo $data["OrderID"]; ?></td>
                <td><?php echo $data["ClientID"]; ?></td>
                <td><?php echo $data["FrameID"]; ?></td>
                <td><?php echo $data["TotalPrice"]; ?></td>
                
            </tr>
            <?php  } ?>
            
        </tbody>
    </table>
        </div>
        </div>
    </div>



</body>
</html>