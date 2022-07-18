<?php

namespace Core;

use Model\TypeModel;

abstract class AbstractController
{
    protected $view;

    protected $typeModel;

    public function __construct($template)
    {
        $this->view = new View($template);

        $this->typeModel = new TypeModel();
    }

    abstract function index();

}