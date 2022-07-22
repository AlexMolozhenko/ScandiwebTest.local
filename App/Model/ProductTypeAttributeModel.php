<?php

namespace Model;






use core\ModelAbstract\AbstractProductTypeAttributeModel;

class ProductTypeAttributeModel extends AbstractProductTypeAttributeModel
{

    public function add($data)
    {
        extract($data);
        $sql = "INSERT INTO `products_type_attribute` (products_id,type_attribute_id,value) VALUES (`{$products_id}`,`{$type_attribute_id}`,`{$value}`);";
        $result = $this->db->query($sql);
        return 'db insert (products_type_attribute  table): ' . ($result ? 'true' : $this->db->error) . '</br>';
    }

}