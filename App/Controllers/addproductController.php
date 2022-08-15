<?php

namespace Controllers;



use Core\ControllerAbstract\AbstractController;
use Exception\MySQLException;

class addproductController extends AbstractController
{
    /**
     * connection of the user part of the display
     */
    public function __construct()
    {
        parent::__construct('user');

    }

    /**
     * gets product types from the database and connects the html page for adding products
     * @throws \Exception
     */
    public function index(){
        $types = $this->typeService->getAll();
        $errors =\Route::getErrors();
        $this->view->render('addProduct_index_view',[
            'types'=>$types,
            'errors'=>$errors,
        ]);
    }


    /**
     * receives attributes from the database depending on the product type. and returns the generated html with a list of attributes
     * @throws \Exception
     */
    public function getAttribute(){
        $typeId = filter_input(INPUT_POST,'typeId');
        $arrayAttributes = $this->attributeService->getAttributeByTypeId($typeId);
        $this->view->includeAttribute($arrayAttributes,$typeId);
    }

    /**
     * receives these products from the client and stores them in the database
     * @throws \Exception
     */
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