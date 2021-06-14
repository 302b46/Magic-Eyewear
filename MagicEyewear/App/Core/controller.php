<?php

class Controller
{
    //Displays page
    function view($view)
    {
        if(file_exists("../App/Views/DefaultPages/". $view .".php"))
        {
            include "../App/Views/DefaultPages/". $view .".php";
        }
        else
        {
            include "../App/Views/404.php";
        }

    }

    function loadModel($model)
    {
        if(file_exists("../App/Models/". $model .".php"))
        {
            include "../App/Models/". $model .".php";
            return $model = new $model(); 
        }
        
        return false;
    }

}

?>