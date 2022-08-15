<?php

namespace Service;

use Core\ServiceAbstract\AbstractService;

class ProductsService extends AbstractService
{

    /**
     * get all products with attributes from the database
     * @return array
     * @throws \Exception
     */
    public function getProduct(){
        $productAttribute=[];

        $products = $this->productsModel->getAll();

       $attributes = $this->productTypeAttributeModel->getAll();

        foreach($products as $product){
            $productAttribute[$product['id']]=['product'=>$product];

            foreach($attributes as $attribute){
                if($attribute['productId']==$product['id']){
                    $productAttribute[$product['id']]['attributes'][]=$attribute;
                }
            }
        }
        return $productAttribute;
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

    /**
     * deleting a product and its attribute values
     * @param $productId
     * @throws \Exception
     */
    public function destroy ($productId){
        foreach($productId as $id){
             $this->productTypeAttributeModel->delete($id);
                 $this->productsModel->delete($id);

        }
    }

}