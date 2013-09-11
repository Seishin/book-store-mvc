<?php

class PurchaseModel {
    private $connectionHandler = null;
    private $user = null;
    private $bookId = null;
    
    public function __construct($user, $bookId) {
        $this->user = $user;
        $this->bookId = $bookId;
        
        $this->connectionHandler = new dbHelper();
    }
    
    public function makePurchase() {
        $query = "INSERT INTO purchases (bookId, user) VALUES (" . $this->bookId . ", '" . $this->user . "')";
        return $this->connectionHandler->makePurchase($query);
    }
}

?>
