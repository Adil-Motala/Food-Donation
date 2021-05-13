<?php

class Dataclass
{
    
	private $conn;


    public function __construct()
    {
       $this->conn=mysqli_connect("localhost","root","","donatefood") or die('connection Failed');
    }
    public function getConn()
    {
        return $this->conn;
    }

    public function executeQuery($query)
    {
    	$res=mysqli_query($this->conn,$query);
	    return $res;
    }

    public function getRow($query)
    {
    	$table = mysqli_query($this->conn,$query);
    	$row = mysqli_fetch_assoc($table);
    	return $row;
    }

    public function __destruct()
    {
    	mysqli_close($this->conn);
    }
}

	
?>