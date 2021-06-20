<?php

class FrameGuide extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Face Shapes Guide";
        $this->view("defaultPages/frameGuide",$data);

    }
}

?>