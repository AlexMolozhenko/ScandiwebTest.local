<?php

namespace Model;


use core\ImplementsModel\InterfaceProductTypeAttributeModel;
use core\ModelAbstract\AbstractModel;

class ProductTypeAttributeModel extends AbstractModel implements InterfaceProductTypeAttributeModel
{
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    /**
     * @param $products_id
     * @param $type_attribute_id
     * @param $value
     * @return string
     */
    public function add($products_id,$type_attribute_id,$value)
    {

        $sql = "INSERT INTO `products_type_attribute` (products_id,type_attribute_id,value) VALUES ({$products_id},{$type_attribute_id},{$value});";
        $result = $this->db->query($sql);
        return 'db insert (products_type_attribute  table): ' . ($result ? 'true' : $this->db->error) . '</br>';
    }

}