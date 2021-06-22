<?php
class FilterBy {
    public $brandName;//=isset($_GET['brandname']);
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
        $query = "select BrandImg from brand";

		$database = new Database();
		$data = $database->read($query);
		if(is_array($data))
		{
			return $data;
		}

		return false;
                    
    } 


}
?>