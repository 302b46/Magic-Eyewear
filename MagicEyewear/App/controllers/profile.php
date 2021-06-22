<?php

class Profile extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "My Profile";
        if(isset($_POST['save']))
        {
            $user = $this->loadModel("user"); 
            $user->editProfile($_POST); 
        }
        $this->view("client/profile",$data);

    }
}

?>