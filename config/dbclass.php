<?php

/**
 * 
 */
class DBClass
{
	
	private  $host = "localhost";
	private  $username = "bryo";
	private  $password = "password";
	private  $database = "db_for_api";

	public $connection;

	function connection()
	{
	 $this -> connection = null;
		# code...
	 try {
	 	$this -> connection = new PDO('mysql:host='. $this->host . ';dbname=' .$this->database,$this->username,$this->password);

	 	$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::EXCEPTION);

	 } catch (PDOException $e) {
	 	echo "Connection Error".$e->getMessage();
	 }
		
   return $this->connection;
		/*if($connection){
			echo "success";
		}else{
			echo $connection->error;
		}*/
	}
}


?>