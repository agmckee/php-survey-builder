<?php

require dirname(dirname(__FILE__)) . '/application/controllers/Controller.php';

$page = new SurveyThankYouController;
$page->display();

?>
