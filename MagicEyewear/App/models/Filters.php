<?php
class Filter {
    public $brandName=isset($_GET['brandname']);
    public $Gender;
    public $FrameType;
    public $colors=array();
    

    function FilterByFrames($FrameType,$filterName)
    {
        $database = new Database();
        if($filterName == "frametype"){
            $this->database->query("SELECT * FROM frame f, frametype t where f.FrameType = t.FrameTypeID  AND t.TypeName='".$FrameType."' ");
        }
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