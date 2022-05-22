<?php

namespace App\Controller;

use App\Controller\BaseHandler;

class Err extends BaseHandler{
    public function showPage(){
        echo '404 Not Found!';
    }

    public function welcome()
    {
        // TODO: Implement welcome() method.
    }
}

