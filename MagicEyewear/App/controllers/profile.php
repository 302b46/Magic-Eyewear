<?php

class Profile extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "My Profile";
        if(isset($_POST['editProfile']))
        {

        }
        $this->view("client/profile",$data);

    }
}

?>