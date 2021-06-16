<?php

class GuideHomepage extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Face Shapes Guide";
        $this->view("defaultPages/guide-homepage",$data);

    }
}

?>