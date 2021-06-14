<?php

// This class acts as a router. 
//It runs a specific class with
// a specific function inside 
Class App 
{
	private $controller = "homepage";
	private $method = "index";
	private $params = [];

	public function __construct()
	{

		$url = $this->splitURL();

 		if(file_exists("../App/Controllers/". strtolower($url[0]) .".php"))
 		{
 			$this->controller = strtolower($url[0]);
 			unset($url[0]);
 		}

 		require "../App/Controllers/". $this->controller .".php";
 		$this->controller = new $this->controller;

 		if(isset($url[1]))
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
		$url = isset($_GET['url']) ? $_GET['url'] : "homepage"; //If doesn't exist, go to homepage
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL)); //Removes any illegal url characters
	}
}