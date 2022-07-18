<?php

namespace Core;



abstract class AbstractController
{
    protected $view;

    public function __construct($template)
    {
        $this->view = new View($template);
    }

    abstract function index();

}