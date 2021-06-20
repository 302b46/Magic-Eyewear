<?php

class AdminProfile extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Admin profile";
        $this->view("Admin/AdminProfile",$data);

    }
}

?>