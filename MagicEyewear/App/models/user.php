<?php

class User
{
    function login($POST)
    {
       $database = new Database();

       $_SESSION['errorMessage'] = ""; 


       if(isset($POST['login']))
        {
            $userInputArray['email'] = $POST['email'];
            $userInputArray['password'] = md5($POST['password']);
            $loginQuery = "SELECT * FROM user WHERE Email=:email && Password=:password LIMIT 1";
            $userData = $database->read($loginQuery, $userInputArray);
            
            if(is_array($userData))
            {
                //User is logged in
                $_SESSION['userID'] = $userData[0]->UserID;
                $_SESSION['email'] = $userData[0]->Email;
                header("Location:".ROOT."homepage");
            }//End of is_array
            else
            {
                $_SESSION['errorMessage'] = "Wrong email or password.";

            }
        }//End of isset

        else
            {
                $_SESSION['errorMessage'] = "Please enter a valid email and password.";

            }

    }//End of login()

   function signup($POST)
    {
        $database = new Database();
        if(!empty($POST['firstName']) && !empty($POST['lastName']) && !empty($POST['email']) && !empty($POST['password']))
       {
            if(isset($POST['signup']))
            {
                $userInputArray['firstName'] = $POST['firstName'];
                $userInputArray['lastName'] = $POST['lastName'];
                $userInputArray['email'] = $POST['email'];
                $userInputArray['password'] = md5($POST['password']);
                $userInputArray['userType'] = 2; 

            }//End of isset
        }
        
        $email = $userInputArray['email'];

        //Check if email already exists in database
        $checkEmailQuery = "SELECT * FROM user WHERE Email = ':$email'";
        $userData=$database->read($checkEmailQuery);
        if($userData)
        {
            echo "email already exists.";
            
        }

        else {
            
            $signupQuery = "INSERT INTO user (FirstName, LastName, Email, Password, UserType)
                            VALUES (:firstName, :lastName, :email, :password, :userType)";

            $userData = $database->write($signupQuery, $userInputArray);

            if($userData) //if sign up successful
            {
                header("Refresh:0");
                die;
            }
        }
        







    }//End of signup()

    function checkLoggedIn()
    {
        $database = new Database();

        if(isset($_SESSION['$userID']))
        {
            $userInputArray['userID'] = $_SESSION['userID'];
            $loginQuery = "SELECT * FROM user WHERE UserID=:userID LIMIT 1";
            $userData = $database->read($loginQuery, $userInputArray);
            
            if(is_array($userData))
            {
                //User is logged in
                $_SESSION['userID'] = $userData[0]->UserID;
                $_SESSION['email'] = $userData[0]->Email;
                return true;
            }//End of is_array

        }//End of isset

        return false;


    }//End of checkLoggedIn()


    function logout()
    {
        unset($_SESSION['userID']);
        header("Location:".ROOT."homepage");
        die;

    }//End of logout()





} //End of class


?>