<?php

class LoginRegister extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "LoginRegister";

        if(isset($_POST['login']))
        {
            $user = $this->loadModel("user"); 
            $user->login($_POST); 
        }
        elseif(isset($_POST['signup']))
        {
            $user = $this->loadModel("user");
            $user->signup($_POST);
        }
        $this->view("defaultPages/login-register",$data);

    }
}

?>