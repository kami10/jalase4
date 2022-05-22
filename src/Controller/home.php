<?php

namespace App\Controller;

use App\Controller\BaseHandler;

class Home extends BaseHandler{
    public function showPage(){
        echo 'This is home page!';
    }

    public function welcome()
    {
      echo 'welcome to home page';
    }
}

