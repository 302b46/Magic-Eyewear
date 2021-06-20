
<?php

class Frames extends Controller {
    
    function index()
    {
        $data['page_title'] = "Frames";
        $this->view("Admin/Frames",$data);

    }


}  

?>