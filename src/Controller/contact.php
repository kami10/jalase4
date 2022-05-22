<?php

namespace App\Controller;

use App\Controller\BaseHandler;

class Contact extends BaseHandler{
    public function showPage(){
        echo 'This is contact page!';
    }

    public function welcome()
    {
        echo 'welcome';
    }
}
