<?php

namespace App\Controller;

use App\Controller\BaseHandler;

class About extends BaseHandler {
    public function showPage(){
        echo 'This is about page!';
    }

    public function welcome()
    {
        echo 'Welcome to about page';
    }
}
