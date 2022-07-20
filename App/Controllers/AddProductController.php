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
        $typeAttributeId = $this->typeAttributeModel->get(3);
        $IdTypeAttributeByTypeId = $this->typeAttributeModel->getIdTypeAttributeByTypeId(3);
        $productAdd = $this->productsModel->add([
            'sku'=>'T72',
            'name'=>'bulat',
            'price'=>10000,
            'type_id'=>1,
        ]);
        $productsAll =$this->productsModel->getAll();
        $productId =$this->productsModel->get(3);






        $this->view->render('addProduct_index_view',[
            'typeAll'=>$typeAll,
            'typeId'=>$typeId,
            'attributeAll'=>$attributeAll,
            'attributeId'=>$attributeId,
            'typeAttributeId'=>$typeAttributeId,
            'IdTypeAttributeByTypeId'=>$IdTypeAttributeByTypeId,
            'productAdd'=>$productAdd,
            'productsAll'=>$productsAll,
            'productId'=>$productId,
        ]);


    }

}