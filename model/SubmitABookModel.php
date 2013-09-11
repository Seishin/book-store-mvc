<?php

class SubmitABookModel {
    private $connectionHandler = null;
    
    public function __construct($title, $author, $annotation, $price, $cover, $date) {
        $this->connectionHandler = new dbHelper();
        
        $query = 'INSERT INTO books (`title`, `author`, `description`, `price`, `image`, `dateOfPublication`) VALUES ("' . $title . '", "' . $author . '", "' . $annotation . '", "' . $price . '", "' . $cover  . '", "' . $date . '")';
        
        $this->connectionHandler->submitABook($query);
    }
}
?>
