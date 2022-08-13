<?php

namespace Controllers;



use Core\ControllerAbstract\AbstractController;

class ProductlistController extends AbstractController
{
    /**
     * connection of the user part of the display
     */
    public function __construct()
    {
        parent::__construct('user');

    }

    /**
     * gets an array of products from the database u connects the html page
     * @throws \Exception
     */
    public function index(){

        $products = $this->productsService->getProduct();
        $this->view->render('productList_index_view',[
            'products'=>$products,
        ]);
    }

    /**
     * get the product id and remove it from the database
     * @throws \Exception
     */
    public function destroy(){
        $productsId = $_POST['products'];
        $this->productsService->destroy($productsId);
    }

}