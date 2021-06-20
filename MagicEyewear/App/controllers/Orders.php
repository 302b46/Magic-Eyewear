<?php

class Orders extends Controller {
    
    function index()
    {
        $data['page_title'] = "Orders";
        $this->view("Admin/Orders",$data);

    }


}  

?>