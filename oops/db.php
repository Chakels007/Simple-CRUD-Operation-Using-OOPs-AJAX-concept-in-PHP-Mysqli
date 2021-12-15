<?php 
// session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'oops');
class DB_con
{
    function __construct()
        {
        $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $this->dbh=$con;
          
          if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }


    //Insert
    	public function insert($name,$email,$number,$city)
    	{
            $insert = "INSERT INTO crud(name,email,number,city) VALUES('$name','$email','$number','$city')";    
    	    $ret=mysqli_query($this->dbh,$insert);
    	    return $ret;
    	}
    //read
    public function selectdata()
    	{
            $select = "SELECT * FROM crud";
    	    $result=mysqli_query($this->dbh,$select);
    	    return $result;
    	}
    //select
    public function fetchdata($id)
    	{
            $fetch = "SELECT * FROM crud WHERE id=$id";
    	    $fetchdata=mysqli_query($this->dbh,$fetch);
    	    return $fetchdata;
    	}
    //update
    public function update($name,$email,$number,$city,$id)
    	{
            $update = "UPDATE  crud SET name='$name', email='$email', number='$number', city='$city' WHERE id='$id' ";
    	    $updaterecord=mysqli_query($this->dbh,$update);
    	    return $updaterecord;
    	}
    //Delete 
    public function delete($id)
    	{
            $delete = "DELETE FROM crud WHERE id=$id";
    	    $deleterecord=mysqli_query($this->dbh,$delete);
    	    return $deleterecord;
    	}
}

?>


