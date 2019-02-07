<?php

require_once "controller/FrontendController.php";

$frontendController = new FrontendController();


if(!isset($_GET['action'])){
    $frontendController->home();
    die();
}

if($_GET['action'] == 'detailPost'){
    $frontendController->detailPost($_GET['postId']);
    die();
}
