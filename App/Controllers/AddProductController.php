<?php

namespace Controllers;



use Core\ControllerAbstract\AbstractController;
use Exception\MySQLException;

class AddProductController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('user');

    }

    public function index(){
        $types = $this->typeService->getAll();
        $errors =\Route::getErrors();
        $this->view->render('addProduct_index_view',[
            'types'=>$types,
            'errors'=>$errors,
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
        $attributes = $_POST['attributes'];
        try{
            $this->productsService->setProduct($sku,$name,$price,$typeId,$attributes);
        }catch (MySQLException $e){

            exit($e->getMessage());
        }
    }

}