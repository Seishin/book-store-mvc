<?php

class LoginModel {
    private $connectionHandler = null;
    private $username = null;
    private $password = null;
    
    function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
        
        $this->connectionHandler = new dbHelper();
    }
    
    function login() {
        $query = 'SELECT * FROM users WHERE username = "' . $this->username . '" AND password = "' 
            . $this->password . '"';
        return $this->connectionHandler->login($query);
    } 
    
    function getUserGroup($user) {
        $query = 'SELECT `group` FROM users WHERE username = "' . $user . '"';
        
        return $this->connectionHandler->returnSingleRow($query);
    }
}

?>
