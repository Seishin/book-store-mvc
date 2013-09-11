<?php

class dbHelper {
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $db = "courseproject";
    
    private $connection;
    
    public function __construct() {
        $this->connection = mysql_connect($this->host, $this->user, $this->password) or die(mysql_error());
        $this->connection = mysql_select_db($this->db);
    }
    
    public function connect() {
        return $this->connection;
    }
    
    public function returnAllRecords($query) {
        $q = mysql_query($query) or die(mysql_error());
        
        $books[mysql_num_rows($q)] = null;
        
        $i = 0;
        
        while($row = mysql_fetch_array($q)) {
            $books[$i] = $row;
            $i++;
        }
        return $books;
    }
    
    public function returnSingleRow($query) {
        $q = mysql_query($query) or die(mysql_error());
        
        return mysql_fetch_row($q);
    }


    public function login($query) {
        $query = mysql_query($query) or die(mysql_error());
        if(mysql_num_rows($query) == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function makePurchase($query) {
        $query = mysql_query($query) or die(mysql_error());
        if($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllMadePurchases($query) {
        $query = mysql_query($query) or die (mysql_error());
       
        $books[mysql_num_rows($query)] = null;
        
        $i = 0;
        
        while($row = mysql_fetch_array($query)) {
            $books[$i] = $row;
            $i++;
        }
        return $books;
    }
    
    public function deleteFromPurchases($query) {
        $query = mysql_query($query) or die(mysql_error());
        if(!$query) {
            return false;
        } 
        return true;
    }

    public function deleteABook($query) {
        $query = mysql_query($query) or die(mysql_error());
        if(!$query) {
            return false;
        } 
        return true;
    }
    
    public function returnNumRows($query) {
        $q = mysql_query($query) or die(mysql_error());
        return mysql_num_rows($q);
    }
    
    public function submitABook($query) {
        $q = mysql_query($query) or die(mysql_error());
    }

    public function disconnect() {
        $this->connection = mysql_close();
        unset($this->connection);
    }
}

?>
