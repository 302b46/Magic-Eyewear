<?php

class Profile extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "My Profile";
        $this->view("client/profile",$data);

    }
}

?>