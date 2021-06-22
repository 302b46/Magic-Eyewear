
<?php

class Frames extends Controller {
    
    

    function index()
    {
        $data['page_title'] = "Frames";
        $frames = $this->loadModel("AdminModel"); 
        $frames ->View("SELECT * from frame"); 
        //$this->load->model->readFrames('AdminModel');
        //if(isset($_POST["submitAddFrame"])){
          //  $frames = $this->loadModel("AdminModel"); 
           // $frames ->AddFrame($_POST); 
        //} 

        $this->view("Admin/Frames",$data);
    }




}  

?>