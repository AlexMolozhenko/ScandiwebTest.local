<?php
namespace core\ServiceAbstract;

use Model\AttributeModel;
use Model\ProductsModel;
use Model\ProductTypeAttributeModel;
use Model\TypeAttributeModel;
use Model\TypeModel;

abstract class AbstractService
{
    protected $typeModel;

    protected $attributeModel;

    protected $typeAttributeModel;

    protected $productsModel;

    protected $productTypeAttributeModel;

    public function __construct()
    {
        $this->typeModel = new TypeModel();
        $this->attributeModel = new AttributeModel();
        $this->typeAttributeModel = new TypeAttributeModel();
        $this->productsModel = new ProductsModel();
        $this->productTypeAttributeModel = new ProductTypeAttributeModel();
    }

}