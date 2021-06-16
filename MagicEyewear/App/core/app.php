<?php
// This class acts as a router. 
//It runs a specific class with
// a specific function inside 

class App
{
	// Default values in case no class or method were provided (goes to homepage automatically)
    private $controller = "homepage";
	private $method = "index";
	private $params = [];

	public function __construct()
	{
		$url = $this->splitURL();

 		if(file_exists("../app/controllers/". strtolower($url[0]) .".php"))
 		{
 			$this->controller = strtolower($url[0]);
 			unset($url[0]);
 		}

 		require "../app/controllers/". $this->controller .".php";
 		$this->controller = new $this->controller; //class

 		if(isset($url[1])) //method
 		{
 			if(method_exists($this->controller, $url[1]))
 			{
 				$this->method = $url[1];
 				unset($url[1]);
 			}
 		}

 		//run the class and method
 		$this->params = array_values($url); //resets array with remaining values
 		call_user_func_array([$this->controller,$this->method], $this->params); 
	}

	private function splitURL()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : "homepage"; //If no page requested, go to homepage
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL)); //Removes any illegal url characters
	}
}

?>