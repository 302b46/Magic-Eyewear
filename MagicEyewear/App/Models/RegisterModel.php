<?php

require_once (__dir__ . '/DatabaseConnection.php');

class RegisterModule extends DatabaseConnection{

     /**
      * @param array
      * @return array
      * @desc Creates and returns a user record....
    **/

    public function registerUser(array $user) :array
    {

        $this->query("INSERT INTO user (FirstName, LastName, Email, Password, UserType)
                        VALUES (:firstName, :lastName, :email, :password, :userType)"); 

        $this->bind('FirstName', $user['firstName']);
        $this->bind('LastName', $user['lastName']);
        $this->bind('Email', $user['email']);
        $this->bind('Password', $user['password']);
        $this->bind('UserType', $user['userType']);

        
      if ($this->execute())
      {
        $Response = array('status' => true,);
        return $Response;
      } 

      else
      {
        $Response = array(
          'status' => false
        );
        return $Response;
      }

    }// End of registerUser()


    /**
      * @param string
      * @return array
      * @desc Returns a user record with the same email
    **/

    public function getUser(string $email) :array
    {
        
        $this->query("SELECT * FROM user WHERE Email=:email"); 
        $this->bind('Email', $email); 
        $this->execute();

        $User = $this->fetch(); 

        if(!empty($User))
        {
            $Response = array('status'=>true, 'data'=>$User); 
            return $Response;
        }

        
            $Response = array('status'=>false, 'data'=>[]); 
            return $Response;
        

    }//End of getUser()






}//End of class


?>