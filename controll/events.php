<?php

include('model/viewModel.php');
$view = new viewModel();

//including the header
$view->getView('view/header.php');

//including the content for the specials page
$view->getView('view/eventsContent.php');

//including the footer
$view->getView('view/footer.php');

?>