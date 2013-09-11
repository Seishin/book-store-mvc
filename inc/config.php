<?php
// Web Site related variables
$title = "Some Web Site";

function __autoload($className) {
    if(is_file('./Controller/' . $className . '.php')) {
        require('./Controller/' . $className . '.php');
    } else if(is_file('./Model/' . $className . '.php')) {
        require('./Model/' . $className . '.php');
    } else if(is_file('./inc/' . $className . '.php')) {
        require_once('./inc/' . $className . '.php');
    }
}

$page = null;
if(isset($_GET['action'])) {
    $page = $_GET['action'];
}

?>
