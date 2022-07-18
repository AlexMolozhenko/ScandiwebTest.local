<?php

namespace Controllers;

use Core\AbstractController;
use Core\View;

class ProductListController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('user');

    }

    public function index(){
        $type = $this->typeModel->getAll();
        $this->view->render('productList_index_view',['type'=>$type]);



    }


}