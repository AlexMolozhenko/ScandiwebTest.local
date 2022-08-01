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
        $types = $this->typeService->getAll();
//
//        $attributeService = $this->attributeService->getAttributeByTypeId(2);
//
//        $productService = $this->productsService->setProduct('Test3','tom and jery',1200.50,2,[
//            ['type_attribute_id'=>12,'value'=>0.5],
//        ]);

        $this->view->render('addProduct_index_view',[
            'types'=>$types,
//            'productService'=>$productService,
//            'attributeService'=>$attributeService,
        ]);


    }


    public function getAttribute(){
        $typeId = filter_input(INPUT_GET,'typeId');
        $arrayAttributes = $this->attributeService->getAttributeByTypeId($typeId);
        $this->view->includeAttribute($arrayAttributes,$typeId);
    }



    public function add(){
        $sku = filter_input(INPUT_POST,'sku');
        $name = filter_input(INPUT_POST,'name');
        $price = filter_input(INPUT_POST,'price');
        $typeId = filter_input(INPUT_POST,'typeId');
//        $attributes = filter_input(INPUT_POST,'attributes');
        $attributes = $_POST['attributes'];

       $result = $this->productsService->setProduct($sku,$name,$price,$typeId,$attributes);
       echo$result;
//        $form = $_POST;
//        return var_dump($form);
//        var_dump($_POST['attributes']);
    }

}