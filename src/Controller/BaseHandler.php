<?php

namespace App\Controller;

use App\Interfaces\HandlerInterface;

abstract class BaseHandler implements HandlerInterface
{
abstract public function welcome();
}
