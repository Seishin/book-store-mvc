<?php

class BasketModel {
    private $connectionHandler = null;
    
    public function __construct() {
        $this->connectionHandler = new dbHelper();
    }
    
    public function getAllMadePurchases() {
        $query = "SELECT books.title, books.price, purchases.date, purchases.id FROM purchases INNER JOIN books ON purchases.bookId = books.id WHERE user = '" . $_SESSION['user'] . "'";
        return $this->connectionHandler->getAllMadePurchases($query);
    }
    
    public function deleteFromPurchases($id) {
        $query = "DELETE FROM purchases WHERE id = " . $id;
        echo $query;
        return $this->connectionHandler->deleteFromPurchases($query);
    }
}

?>
