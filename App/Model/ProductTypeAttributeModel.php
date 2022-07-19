<?php

namespace Model;

use Core\AbstractModel;

class ProductTypeAttributeModel extends AbstractModel
{
    protected function getAll()
    {
        // TODO: Implement getAll() method.
    }
    protected function get($id)
    {
        // TODO: Implement get() method.
    }
    protected function add($data)
    {
        extract($data);
        $sql = "INSERT INTO `products_type_attribute` (products_id,type_attribute_id,value) VALUES ('{$sku}','{$name}','{$price}','{$type_id}');";
        $result = $this->db->query($sql);
        return 'db insert (products_type_attribute  table): ' . ($result ? 'true' : $this->db->error) . '</br>';
    }

}