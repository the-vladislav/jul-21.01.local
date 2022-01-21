<?php


class View
{
    public $layout = "main.php";
    public $page = "index";
    public function render() {
//        echo 'hello from class View, method rendor';

        include $this->layout;
    }
}