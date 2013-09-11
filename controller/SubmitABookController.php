<?php

class SubmitABookController {
    private $model = null;
    
    private $title = null;
    private $author = null;
    private $annotation = null;
    private $price = null;
    private $cover = null;
    private $date = null;
    
    public function __construct() {
        $this->title = $_POST['title'];
        $this->author = $_POST['author'];
        $this->annotation = $_POST['annotation'];
        $this->price = $_POST['price'];
        $this->date = date('Y-m-d');
        
        if ($_FILES["cover"]["error"] > 0) {
            echo "Return Code: " . $_FILES["cover"]["error"] . "<br>";
        } else {
            if (file_exists("images/books/" . $_FILES["cover"]["name"])){
                echo $_FILES["cover"]["name"] . " already exists. ";
            } else {
                move_uploaded_file($_FILES["cover"]["tmp_name"],
                "images/books/" . $_FILES["cover"]["name"]);
                $this->cover = "images/books/" . $_FILES['cover']["name"];
            }
        }
        
        if($this->title && $this->author && $this->annotation && $this->price && $this->cover && $this->date) {
            $this->model = new SubmitABookModel($this->title, $this->author, $this->annotation,
                $this->price, $this->cover, $this->date);
        
            $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '';
            header("Location: http://$loc");
            exit();
        } else {
            echo 'Error!';
        }
    }
}
?>
