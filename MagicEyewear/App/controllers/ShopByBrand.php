<?php

class ShopByBrand extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "brands";

        $brands = $this->loadModel("FilterBy");
        $result = $brands->ViewAllBrands();
        $data['brandss'] = $result;

        $this->view("defaultPages/brands",$data);
        
    }

    public function ShopBrands()
    {
		//$res = $this->FilterBy->ViewAllBrands();
        
	}
}

?>