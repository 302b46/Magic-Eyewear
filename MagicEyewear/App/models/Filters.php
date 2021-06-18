<?php
class Filter {
    public $brandName=isset($_GET['brandname']);
    public $Gender;
    public $FrameType;
    public $colors=array();
    

    function ProductListing($FrameType,$Gender)
    {
        $database = new Database();
        
    }

   function ViewAllBrands()
    { 
        $database = new Database();
        $this->database->query("SELECT * FROM brand");

        return $this->database->resultSet();
    } 

    function ShopBrand($brandName) //shop based on one brand chosen in page brands
    {
        $database = new Database();

    }

}
?>