<?php

class Mysql_Connection 

{
    
    //private  $server = "mysql:host=localhost;dbname=id4826444_lottery";
    
    private  $server = "mysql:host=localhost;dbname=lottery";

    //private  $user = "id4826444_bala";
    
    private  $user = "root";

    //private  $pass = "lottbala";
    
    private  $pass = "";

    private  $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    protected $con;

    public function openConnection()
    {

        try {

            $this->con = new PDO($this->server, $this->user,$this->pass,$this->options);

            return $this->con;

        } catch (PDOException $e) {

            echo "There is some problem in connection: " . $e->getMessage();

        }

    }
    
    
    public function closeConnection() 
    {
 
   	    $this->con = null;
 
    }
 
}

class Home_Model extends Mysql_Connection
    
{
    
    public function uploadPDF($luck, $data) 
    {

        $obj = new Mysql_Connection;
        
        $db = $obj->openConnection();
        
        $sql = "SELECT 
                    ".$luck."_id 
                FROM 
                    luck_".$luck." 
                WHERE 
                    result_date
                LIKE
                    '".$data['result_date']."%'";
        
        $dbh = $db->prepare($sql);
        
        $dbh->execute();
        
        if ($dbh->rowCount() === 1) {
            
            $sql = "UPDATE luck_".$luck." SET result_name = :nm";
        
            $dbh = $db->prepare($sql);

            $dbh->execute(array(':nm' => $data['result_name']));

            $db = $obj->closeConnection();

            if ($dbh->rowCount() === 1) {

                return true;

            }

            return false;
            
            
        } else {
            
            $sql = "INSERT INTO luck_".$luck."(result_name, result_date, created_date) VALUES(:nm, :rdt, :cdt)";
        
            $dbh = $db->prepare($sql);

            $dbh->execute(array(':nm' => $data['result_name'], ':rdt' => $data['result_date'], ':cdt' => $data['created_date']));

            $db = $obj->closeConnection();

            if ($dbh->rowCount() === 1) {

                return true;

            }

            return false;
            
        }        
                
    }
    
    
    public function getDocName($luck, $date) 
    {
        
        $obj = new Mysql_Connection;
        
        $db = $obj->openConnection();
        
        $sql = "SELECT 
                    result_name
                FROM 
                    luck_".$luck."
                WHERE
                    result_date
                LIKE
                    '".$date."%'";

        $dbh = $db->prepare($sql);
        
        $dbh->execute();
        
        $this->res = $dbh->fetch();
        
        $db = $obj->closeConnection();
        
        return $this->res;
        
    }
    
}
