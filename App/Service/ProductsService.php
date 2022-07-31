<?php

namespace Service;

use core\ServiceAbstract\AbstractService;

class ProductsService extends AbstractService
{

    public function getProduct(){
        //TODO: getProduct() method.
    }

    /**
     * add product with attributes
     * @param $sku
     * @param $name
     * @param $price
     * @param $type_id
     * @param array $attributes
     * @return bool
     * @throws \Exception
     */
    public function setProduct($sku,$name,$price,$type_id,$attributes=[]){
        $IdProduct = $this->productsModel->add($sku,$name,$price,$type_id);
        foreach ($attributes as $key=>$value){

            $this->productTypeAttributeModel->add($IdProduct,$key,$value);
        }
    }

}