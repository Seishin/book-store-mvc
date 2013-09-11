<?php

class LoginController {
    private $username = null;
    private $password = null;
    private $group = null;
    
    private $model = null;
    
    function __construct() {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        
        $this->model = new LoginModel($this->username, $this->password);
        
        $this->group = $this->model->getUserGroup($this->username);
        
        if($this->model->login()) {
            $_SESSION['user'] = $this->username;
            $_SESSION['group'] = $this->group[0];
            $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '';
            header("Location: http://$loc");
            exit();
        } else {
            echo 'Wrong username or password';
        }
    }
}

?>
