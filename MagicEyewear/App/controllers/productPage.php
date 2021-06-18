<?php

class ProductPage extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Product";
        $this->view("defaultPages/productPage",$data);

    }
}

?>