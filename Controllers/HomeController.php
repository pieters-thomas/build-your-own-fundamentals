<?php


class HomeController implements Controller
{
    public function render($GET):void
    {
        require 'Views/home.php';
    }
}
