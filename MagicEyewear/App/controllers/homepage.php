<?php

class Homepage extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Homepage";
        $this->view("defaultPages/index",$data);
    }
}

?>