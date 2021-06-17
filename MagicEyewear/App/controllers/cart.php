<?php

class Cart extends Controller
{
    //Shows page
    function index()
    {
        $data['page_title'] = "My Cart";
        $this->view("client/cart",$data);

    }
}

?>