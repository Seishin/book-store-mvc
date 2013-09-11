<?php

class DeleteABookModel {
    private $connectionHandler = null;
    private $bookId = null;
    
    public function __construct($bookId) {
        $this->bookId = $bookId;
        
        $this->connectionHandler = new dbHelper();
    }
    
    public function deleteABook() {
        $query = "DELETE FROM books WHERE `id` = '" . $this->bookId . "'";
        
        $this->connectionHandler->deleteABook($query);
    }
}
?>
