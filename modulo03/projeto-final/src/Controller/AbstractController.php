<?php

declare(strict_types=1);

namespace App\Controller;

abstract class AbstractController
{
    public function render(String $viewName): void 
    {
        include dirname(__DIR__)."/View/{$viewName}.php";
    } 
}