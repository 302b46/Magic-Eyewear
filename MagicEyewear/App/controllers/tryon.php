<?php

class TryOn extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Virtual Try-On";
        $this->view("defaultPages/try-on",$data);

    }
}

?>