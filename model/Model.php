<?php

class Model {
    private $connectionHandler;
    private $query;
    
    public function __construct() {
        $this->connectionHandler = new dbHelper();
    }
    
    public function fetchAllBooks() {
        $this->query = "SELECT * FROM books";
        
        return $this->connectionHandler->returnAllRecords($this->query);
    }
}

?>
