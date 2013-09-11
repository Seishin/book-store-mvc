<?php
session_start();

include 'inc/config.php';
include 'controller/controller.php';

include 'view/Header.php';
?>

<div class="mainContent">

<?php
include 'view/MenuPanel.php';

$controller = new Controller();
$controller->invoke($page);
?>
    
</div>

<?php
include 'view/Footer.php';
?>