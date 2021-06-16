<?php

class AboutUs extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "About Us";
        $this->view("defaultPages/about-us",$data);

    }
}

?>