<?php

class ShopByBrand extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "brands";
        $this->view("defaultPages/brands",$data);

    }

    public function ShopBrands()
    {
		//$res = $this->Filters->ViewAllBrands();
        $brands = $this->loadModel("Filters");
 	 	$brands->ViewAllBrands();
	}
}

?>