<?php

require dirname(dirname(__FILE__)) . '/application/controllers/Controller.php';

$page = new IndexController;
$page->display();

?>
