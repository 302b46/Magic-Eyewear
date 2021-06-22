
<!--  create & implement AdminHomepage in views->Admin->AdminHomepage.php -->
<?php

class Admin extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Admin";

        $users = $this->loadModel("AdminModel"); 

        $users->userCount(); 
        //add function add, edit and delete 

        $this->view("Admin/AdminHomepage",$data);

    }
}

?>