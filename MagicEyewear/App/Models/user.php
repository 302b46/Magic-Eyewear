<?php

class User
{
    function login($POST)
    {
        $database = new Database(); 

        $_SESSION['error'] = ""; 
        if(isset($POST['email']) && isset($POST['password']))
		{

			$userArray['email'] = $POST['email'];
			$userArray['password'] = $POST['password'];

			$loginQuery = "SELECT * FROM user WHERE Email = :email && Password = :password limit 1";
			$data = $database->read($loginQuery,$userArray);
			if(is_array($data))
			{
 				//logged in
 				$_SESSION['email'] = $data[0]->email;
				$_SESSION['id'] = $data[0]->id;

				header("Location:". ROOT . "home");
				die;

			}
            else{

				$_SESSION['error'] = "Wrong email or password,";
			}
		} //End of first if statement
        else{

			$_SESSION['error'] = "Please enter a valid email and password.";
		}

	}//End of login()
    
    function signUp($POST)
    {
        $database = new Database();

        $_SESSION['error'] = ""; 
        if(isset($_POST['email'] && $_POST['password']))
        {
            $userArray['email'] = $_POST['email'];
            $userArray['password'] = $_POST['password'];
            $userArray['first_name'] = $_POST['first_name'];
            $userArray['last_name'] = $_POST['last_name'];

            $signUpQuery = "INSERT INTO user (FirstName, LastName, Email, Password, UserType)
                            VALUES (:firstName, :lastName, :email, :password, 2)";

            $data = $database->write($signUpQuery, $userArray);
            if($data)
            {
                header("Location:".ROOT."login");
                die;
            }

        }// End of first if statement

        else{

			$_SESSION['error'] = "Please enter a valid email and password.";
		}

    }// End of signUp()



    function isLoggedIn()
    {
        $database = new Database();
        if(isset($_SESSION['id']))
        {
            $userArray['id'] = $_SESSION['id'];
            $query = "SELECT * FROM user where ID = :id limit 1"; 
            $data = $database->read($query,$userArray);

            if(is_array($data))
			{
				//logged in
 				$_SESSION['email'] = $data[0]->email;
				$_SESSION['id'] = $data[0]->id;

				return true;
			}

        }//End of if isset

        return false; //Not logged in


    }//End of isLoggedIn()


    
    function logout()
    {
        unset($_SESSION['email']);
		unset($_SESSION['id']);

		header("Location:". ROOT . "login");
		die;
    }





}//End of class





?>