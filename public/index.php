<?php

use App\Controller\Contact;
use App\Controller\About;
use App\Controller\Home;
use App\Controller\Err;
use App\Controller\LoginHandler;


require '../vendor/autoload.php';

$address = $_GET['path'];

$handler = null;
switch ($address){
    case 'contact':
        $handler = new Contact();
        break;
    case 'about':
        $handler = new About();
        break;
    case 'home':
        $handler = new Home();
        break;
    case 'loginhandler':
        $handler = new LoginHandler();
        break;
    default:
        $handler = new Err();
        break;
}

$handler->showPage();
$handler->welcome();

