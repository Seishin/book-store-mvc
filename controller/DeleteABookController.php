<?php
    
class DeleteABookController {
    private $bookId = null;
    
    private $model = null;
    
    public function __construct() {
        $this->bookId = $_GET['bookId'];
        
        $this->model = new DeleteABookModel($this->bookId);
        
        $this->model->deleteABook();
        
        $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'];
        header("Location: http://$loc");
        exit();
    }
}
?>
