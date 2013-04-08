<?php


class DB{
	
	

	private $_host = "localhost";
	private $_user = "root";
	private $_pass = "";	
	private $_database = "hh";
	private $_dbconn = "";

	
	// Class methods 
	private function startsWith($needle, $haystack) 
	 {
	     return preg_match('/^'.preg_quote($needle)."/", $haystack);
	 }
	// This function connects to a database
	public  function connectDB()
	{
		try 
		{
			$this->_dbconn = mysql_connect($this->_host,$this->_user,$this->_pass);
	
			if($this->_dbconn)
			{
				mysql_select_db($this->_database);
				return $this->_dbconn;
			}
			else
				return false;
		}
		catch (Exception $e)
		{
			error_log("Class = DB -- Method = connectDB \n\r",3,"../error.log");
		}
	}
	
	// method to execute DB related queries
	public function executeQuery($query)
	{
		try 
		{
			if($result = mysql_query($query))
			{
				if($this->startsWith('select',strtolower($query)))
				if(mysql_num_rows($result) > 0)
				{
				while ($record = mysql_fetch_assoc($result))
				{
					$arr[] = $record;
				}
					return $arr;
				}
				else 
					return false;
					
				return true;
			}
			return false;
		
		}
		catch (Exception $e)
		{
			die($e->getMessage());
			//error_log("Class = DB -- Method = executeQuery \n\r",3,"../error.log");
		}
	}
}

?>

