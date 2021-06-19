<?php
class Filter {
    public $brandName=isset($_GET['brandname']);
    public $Gender;
    public $FrameType;
    public $colors=array();
    

    function FilterFrames($FilterType,$filterName)
    {
        $database = new Database();
        $this->database->query("SELECT * FROM frame where FilterType='$FilterType' ");
        return $this->database->resultSet();
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
        $this->database->query("SELECT * FROM brand where BrandName= '$brandName'");
        return $this->database->resultSet();
    }

}
?>