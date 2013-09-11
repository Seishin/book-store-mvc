<?php
class PurchaseController {
    private $bookId = null;
    private $user = null;
    
    private $purchaseModel = null;
    
    public function __construct() {
        $this->bookId = $_GET['bookId'];
        $this->user = $_GET['user'];
        
        if($_SESSION == false) {
            echo "Register!";
            return;
        } 
        
        $this->purchaseModel = new PurchaseModel($this->user, $this->bookId);
        
        if($this->purchaseModel->makePurchase()) {
            $_SESSION['purchases'] += 1;
            $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '?action=basket';
            header("Location: http://$loc");
            exit();
        } else {
            echo "Cannot make a purchase!";
        }
    }
}

?>
