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
        $query = "SELECT DISTINCT(BrandImage) FROM brand";
        $res = $database->query($query);
        return $this->database->resultSet();
    } 


}
?>