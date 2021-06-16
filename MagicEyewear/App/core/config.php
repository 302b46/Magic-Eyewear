<?php 

/*setting website title*/

define('WEBSITE_TITLE', "EyeCare Optics");

/*setting database variables*/

define('DB_TYPE','mysql');
define('DB_NAME','magic_eyewear');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');

/*protocal type http or https*/
define('PROTOCAL','http');

/*root and asset paths*/

//Checks server name and the folder containing the file
$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");

//Remove server root to get the paths
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

// Path to public folder 
define('ROOT', str_replace("App/core", "public", $path));
// Path to public assets folder
define('ASSETS', str_replace("App/core", "public/assets", $path));

/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/

define('DEBUG',true);

if(DEBUG)
{
	ini_set("display_errors",1);
}
else
{
	ini_set("display_errors",0);
}

?>