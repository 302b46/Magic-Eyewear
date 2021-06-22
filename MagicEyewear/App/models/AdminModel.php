<?php



class AdminModel {
    
    public function userCount(){
        
            $db= new Database();

            $query = 'SELECT * FROM user';
            $DataRead = $db->CountUsers($query);
            if($DataRead == 0){
                echo "There's no frames in stock.";
            } else{

                $_SESSION['usersCount'] = $DataRead;

                echo "count = ";
                echo $_SESSION['usersCount'];
                
                
            }
    }

    public function View($query){

        
           /* $_SESSION["query"] = $query ;
            echo $_SESSION["query"];
            $obj = new databaseAdmin();
            $obj ->displayFrames();*/


            $db= new Database();
            $counting = $db->CountUsers($query);
            $_SESSION['countframe'] = $counting;
            echo $_SESSION['countframe'];

        

    } 

    public function AddFrame($POST){   
        if(isset($_POST["submitAddFrame"])){
            //add frame form
            
            $brand = $POST["brandname"];
            $code = $POST["code"];
            $rim = $POST["rim"];
            $size = $POST["size"];
            $color = $POST["color"];
            $shape = $POST["shape"];
            $material = $POST["material"];
            $gender =$POST["gender"];
            $type = $POST["type"];
            $desc= $POST["desc"];
            $price =$POST["price"];
            $image =$POST["image"];
    
            $obj = new databaseAdmin();
            $obj ->InsertFrames($code,$type,$brand,$desc,
            $color,$rim,$material,$gender,$size,$image,$shape,
            $price);
    
    }
       /* if(isset($POST["submitAddFrame"])){

            $db= new Database();
            $brand = $POST["brandname"];
            $code = $POST["code"];
            $rim = $POST["rim"];
            $size = $POST["size"];
            $color = $POST["color"];
            $shape = $POST["shape"];
            $material = $POST["material"];
            $gender =$POST["gender"];
            $category = $POST["category"];
            $desc= $POST["desc"];
            $price =$POST["price"];
            $image =$POST["image"];

            $query = 'INSERT INTO frame(FrameCode,FrameType,FrameBrand,FrameDescription,
            FrameColor,FrameRim,FrameMaterial,AssignedGender,FrameSize,FrameImage,FrameShape,FramePrice) 
            VALUES (:code,:category,:brandname,:desc,:color,:rim,:material,:gender,:size,:image,:shape,:price)';

            $arrayframes= (array(":code"=>$code,
            ":category"=>$category,":brandname"=>$brand,
            ":desc"=>$desc,":color"=>$color,":rim"=>$rim,
            ":material"=>$material,":gender"=>$gender,":size"=>$size,
            ":image"=>$image,":shape"=>$shape,":price"=>$price));

            $DataRead = $db->AddFrames($query,$arrayframes);

            if($DataRead) //if sign up successful
            {
                header("Refresh:0");
                die;
            }
        }*/
    }


       


    

}

?>