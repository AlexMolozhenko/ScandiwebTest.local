<?php

namespace Controllers;

use Core\AbstractController;

class AddProductController extends AbstractController
{
    public function __construct()
    {
        parent::__construct('user');

    }

    public function index(){

        $this->view->render('addProduct_index_view');


    }

}