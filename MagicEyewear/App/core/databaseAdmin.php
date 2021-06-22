<?php


class databaseAdmin {
	
	public class __construct(){
		$conn = mysqli_connect('localhost', 'root', '', 'magic_eyewear');
			if (!$conn)
			{
				die ( "connection failed".mysqli_connect_error());
			}

	}
	

}





?>