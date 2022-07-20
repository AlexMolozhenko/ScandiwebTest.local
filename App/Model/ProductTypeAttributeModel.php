<?php

namespace Model;




use core\ModelAbstract\AbstractProductTypeAttributeModel;

class ProductTypeAttributeModel extends AbstractProductTypeAttributeModel
{

    protected function add($data)
    {
        extract($data);
        $sql = "INSERT INTO `products_type_attribute` (products_id,type_attribute_id,value) VALUES ('{$sku}','{$name}','{$price}','{$type_id}');";
        $result = $this->db->query($sql);
        return 'db insert (products_type_attribute  table): ' . ($result ? 'true' : $this->db->error) . '</br>';
    }

}