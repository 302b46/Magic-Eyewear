<?php

class Database
{
  private function database_connection()
  {
    try{

			$string = DB_TYPE .":host=".DB_HOST.";dbname=".DB_NAME.";";
			return $database = new PDO($string,DB_USER,DB_PASS);
		}catch(PDOException $exception){

			die($exception->getMessage());
		}
  }//End of database_connection()


  // Read data from database 
  public function read($query, $data=[])
  {
    $database = $this->database_connection(); 
    $statement = $database->prepare($query); //database statement

    if(count($data)==0) 
    {
      $statement = $database->query($query); 
      $check = 0; 
      
      if($statement)
      {
        $check = 1;  
      }
    
    }//End of if count

    else
    {
      $check = $statement->execute($data);
    }

    if($check)
    {
      $data = $statement->fetchAll(PDO::FETCH_OBJ);
      if(is_array($data) && count($data) > 0)
			{
				return $data;
			}

			return false;
		}//End of if check
    else
		{
			return false;
		}

  }//End of read()

  
// Write data to database
public function write($query, $data=[])
{
    $database = $this->database_connection(); 
    $statement = $database->prepare($query); //database statement

    if(count($data)==0)
    {
      $statement = $database->query($query); 
      $check = 0; 
      
      if($statement)
      {
        $check = 1;  
      }
    
    }//End of if count

    else
    {
      $check = $statement->execute($data); 
    }

    if($check)
    {
      return true;
    }
    else
    {
      return false;
    }

  }//End of write()


 // Execute the prepared statement
  public function execute()
  {
      return $this->stmt->execute();
  }
    // Prepare statement with query
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }
    // Get result set as array of objects
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

} // End of class

?>