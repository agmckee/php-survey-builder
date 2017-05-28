<?php

require dirname(dirname(__FILE__)) . '/application/controllers/Controller.php';

$page = new LogoutController;
$page->display();

?>
