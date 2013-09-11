<?php

class Controller {
    private $model;
    
    public function __construct() {
        $this->model = new Model();
    }
    
    public function invoke($action) {
        switch ($action) {
            case '':
                $books = $this->model->fetchAllBooks();
                include 'view/Books.php';
                break;
            
            case 'view':
                $view = new ViewController();
                break;
            
            case 'search':
                $searchedResults = new SearchController();
                break;

            case 'login':
                $login = new LoginController();
                break;
            
            case 'logout':
                session_unset(); 
                session_write_close(); 
                
                $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '';
                header("Location: http://$loc");
                exit();
                break;
            
            case 'register':
                
                break;
            
            case 'purchase': 
                $purchase = new PurchaseController();
                break;
            
            case 'basket':
                $basket = new BasketController();
                break;
            
            case 'deleteItemFromBasket':
                $basket = new BasketController();
                $basket->deleteItemFromBasket($_GET['itemId']);
                
                break;
            
            case 'cp':
                $cp = new ControlPanelController();
                break;
            
            case 'submitABook':
                $submitABook = new SubmitABookController();
                break;
            
            case 'deleteABook':
                $deleteABook = new DeleteABookController();
                break;
            
            default:
                break;
        }
    }
}

?>
