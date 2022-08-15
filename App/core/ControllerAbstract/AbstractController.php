<?php



namespace Core\ControllerAbstract;

use Core\View;
use Service\AttributeService;
use Service\ProductsService;
use Service\TypeService;

abstract class AbstractController
{
    protected $view;

    protected $productsService;

    protected $typeService;

    protected $attributeService;


    public function __construct($template)
    {
        $this->view = new View($template);

        $this->productsService = new ProductsService();

        $this->typeService = new TypeService();

        $this->attributeService = new AttributeService();

    }

    abstract function index();

}