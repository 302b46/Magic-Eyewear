<?php

class brand extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "brands";
        $this->view("defaultPages/brands",$data);

    }
}

?>