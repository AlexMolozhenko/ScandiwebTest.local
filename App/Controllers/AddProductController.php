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
//        $typeService = $this->typeService->getAll();
//
//        $attributeService = $this->attributeService->getAttributeByTypeId(2);
//
//        $productService = $this->productsService->setProduct('Test3','tom and jery',1200.50,2,[
//            ['type_attribute_id'=>12,'value'=>0.5],
//        ]);





        $this->view->render('addProduct_index_view',[
            'typeService'=>$typeService,
            'productService'=>$productService,
            'attributeService'=>$attributeService,
        ]);


    }

}