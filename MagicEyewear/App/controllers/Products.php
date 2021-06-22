<?php

class Products extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Products";
        $this->view("defaultPages/filter",$data);

    }

    
}

?>