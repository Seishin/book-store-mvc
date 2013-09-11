<?php

class SearchModel {
    private $connectionHandler = null;
    private $type = null;
    private $queryString = null;
    
    public function __construct($_type, $_query) {
        $this->type = $_type;
        $this->queryString = $_query;
        
        $this->connectionHandler = new dbHelper();
    }
    
    public function getAllResults() {
        $query = null;
        
        switch ($this->type) {
            case 'title':
                $query = 'SELECT * FROM books WHERE title = "' . $this->queryString . '"';
                break;
            case 'author':
                $query = 'SELECT * FROM books WHERE author = "' . $this->queryString . '"';
                break;
            case 'price':
                $query = 'SELECT * FROM books WHERE price = "' . $this->queryString . '"';
                break;
        }
        
        return $this->connectionHandler->returnAllRecords($query);
    }
}

?>
