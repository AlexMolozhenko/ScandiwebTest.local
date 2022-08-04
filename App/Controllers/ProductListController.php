<?php

namespace Controllers;



use Core\ControllerAbstract\AbstractController;

class ProductListController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('user');

    }

    public function index(){

        $products = $this->productsService->getProduct();
        $this->view->render('productList_index_view',[
            'products'=>$products,
        ]);
    }

    public function destroy(){
        $productsId = $_POST['products'];
        $this->productsService->destroy($productsId);
    }

}