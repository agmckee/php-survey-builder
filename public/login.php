<?php

require dirname(dirname(__FILE__)) . '/application/controllers/Controller.php';

$page = new LoginController;
$page->display();

?>
