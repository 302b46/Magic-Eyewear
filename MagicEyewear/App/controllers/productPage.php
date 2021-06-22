<?php

class ProductPage extends Controller
{

    function index()
    {
        $data['page_title'] = "Product";

        $product = $this->loadModel("display");
        // $product->displayProduct(); 

        // if(isset($_POST['addToCart']))
        // {
        //     // Create an object from model client  
        //     $client = $this->loadModel("client");
        //     $client->addToCart($_POST); 
        // }



        // Displays product page
        $this->view("defaultPages/productPage",$data);


    }

    
}

?>