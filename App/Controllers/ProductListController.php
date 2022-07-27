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

        $this->view->render('productList_index_view');




    }

    public function getAtr(){
        echo"ok";
    }


}