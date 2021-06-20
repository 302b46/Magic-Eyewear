
<!--  create & implement AdminHomepage in views->Admin->AdminHomepage.php -->
<?php

class Admin extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "Admin";
        $this->view("Admin/AdminHomepage",$data);

    }
}

?>