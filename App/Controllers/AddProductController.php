<?php

namespace Controllers;



use Core\ControllerAbstract\AbstractController;

class AddProductController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('user');

    }

    public function index(){

        $typeAll = $this->typeModel->getAll();
        $typeId = $this->typeModel->get(1);
        $attributeAll = $this->attributeModel->getAll();
        $attributeId = $this->attributeModel->get(1);
        $IdTypeAttributeByTypeId = $this->typeAttributeModel->getIdTypeAttributeByTypeId(3);
        $productAdd = $this->productsModel->add([
            'sku'=>'T82',
            'name'=>'tank',
            'price'=>10000,
            'type_id'=>1,
        ]);
        $productsAll =$this->productsModel->getAll();
        $productId =$this->productsModel->get(3);
//        $productTypeAttribute = $this->productTypeAttributeModel->






        $this->view->render('addProduct_index_view',[
            'typeAll'=>$typeAll,
            'typeId'=>$typeId,
            'attributeAll'=>$attributeAll,
            'attributeId'=>$attributeId,
            'IdTypeAttributeByTypeId'=>$IdTypeAttributeByTypeId,
            'productAdd'=>$productAdd,
            'productsAll'=>$productsAll,
            'productId'=>$productId,
        ]);


    }

}