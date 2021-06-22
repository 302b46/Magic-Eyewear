<?php 
class posts{
    function get_one($link){
        $database =new Database();
        $array['link'] = $link;

        $query="SELECT * FROM frame where FrameID=:link limit 1";
        $data=$database->read($query,$array);

        if (is_array($data)) {
            return $data[0];
        }
        return false;
    }
}
?>