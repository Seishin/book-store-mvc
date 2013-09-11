<?php
class BasketController {
    private $model = null;
    
    public function __construct() {
        $this->model = new BasketModel();
        $books = $this->model->getAllMadePurchases();
        include 'view/Purchases.php';
    }
    
    public function deleteItemFromBasket($id) {
        if($this->model->deleteFromPurchases($id)) {
            $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '?action=basket';
            header("Location: http://$loc");
            exit();
        } else {
            echo "Cannot delete the purchase!";
        }
    }
}

?>
