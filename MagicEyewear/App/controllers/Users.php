<?php

class Users extends Controller {
    
    function index()
    {
        $data['page_title'] = "Users";
        $this->view("Admin/Users",$data);

    }

}  

?>