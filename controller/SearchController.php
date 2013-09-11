<?php

class SearchController {
    private $model = null;
    
    public function __construct() {
        $type = $_POST['type'];
        $query = $_POST['query'];
        
        $this->model = new SearchModel($type, $query);
        $books = $this->model->getAllResults();
        include 'view/SearchResults.php';
    }
    
    
} 

?>
