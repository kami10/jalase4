<?php

namespace App\Controller;

use App\Controller\BaseHandler;
use App\Service\TemplateRenderer;

class Contact extends BaseHandler{
    public function showPage(){
                $template = new TemplateRenderer();
        return $template->render(filename: 'login/login.html');
        echo 'This is contact page!';
    }

    public function welcome()
    {
        echo 'welcome';
    }
}
