<?php

namespace Core\ControllerAbstract;

use Core\View;
use Model\AttributeModel;
use Model\ProductsModel;
use Model\ProductTypeAttributeModel;
use Model\TypeAttributeModel;
use Model\TypeModel;

abstract class AbstractController
{
    protected $view;

    protected $typeModel;

    protected $attributeModel;

    protected $typeAttributeModel;

    protected $productsModel;

    protected $productTypeAttributeModel;

    public function __construct($template)
    {
        $this->view = new View($template);

        $this->typeModel = new TypeModel();
        $this->attributeModel = new AttributeModel();
        $this->typeAttributeModel = new TypeAttributeModel();
        $this->productsModel = new ProductsModel();
        $this->productTypeAttributeModel = new ProductTypeAttributeModel();

    }

    abstract function index();

}