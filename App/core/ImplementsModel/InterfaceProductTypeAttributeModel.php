<?php

namespace core\ImplementsModel;

interface InterfaceProductTypeAttributeModel extends InterfaceModel
{


    /**
     * @param $products_id
     * @param $type_attribute_id
     * @param $value
     * @return mixed
     */
    public function add($products_id,$type_attribute_id,$value);


}