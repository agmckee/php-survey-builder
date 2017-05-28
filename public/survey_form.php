<?php

require dirname(dirname(__FILE__)) . '/applicatin/controllers/Controller.php';

$page = new SurveyFormController;
$page->display();

?>
