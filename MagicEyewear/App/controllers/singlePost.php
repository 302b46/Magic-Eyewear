<?php 
class singlePost extends controller{
    function index($link=''){
        $posts=$this->loadModel("posts");
        $result=$posts->get_one($link);

        $data['post']=$result;
        $data['page_title']="Product";
        $this->view("defaultPages/productPage",$data);
    }

}
?>