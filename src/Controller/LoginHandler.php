<?php

namespace App\Controller;

use App\Controller\BaseHandler;
use App\Service\TemplateRenderer;

class LoginHandler extends BaseHandler
{
    //private $templateRenderer;

//    public function __construct(TemplateRenderer $templateRenderer)
//    {
//        $this->templateRenderer = $templateRenderer;
//    }

    public function showPage(): string
    {
//        $data = [
//            'title' => 'ehsan',
//        ];
//        $template = new TemplateRenderer();
//        return $template->render(filename: 'login/login.html');
        echo 'heloo';
    }

    public function welcome()
    {
        // TODO: Implement welcome() method.
    }
}
