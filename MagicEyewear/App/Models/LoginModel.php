<?php 

require_once (__dir__ . '/DatabaseConnection.php');

class LoginModel extends DatabaseConnection
{
      /**
      * @param string
      * @return array
      * @desc Returns a user record based on the method parameter....
    **/

    public function Login(string $email) :array
    {
        $this->query("SELECT * FROM user WHERE Email=:email"); 
        $this->bind('Email', $email); 
        $this->execute();

        $UserEmail = $this->fetch(); 

        if(empty($UserEmail))
        {
            $Response = array('status'=>true, 'data'=>$UserEmail); 
            return $Response;
        }

        if(!empty($UserEmail))
        {
            $Response = array('status'=>false, 'data'=>$UserEmail); 
            return $Response;
        }


    }//End of Login()








} // End of class


?>