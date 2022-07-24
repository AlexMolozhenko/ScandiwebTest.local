<?php

namespace Model;

use core\ImplementsModel\InterfaceProductsModel;
use core\ModelAbstract\AbstractModel;

class ProductsModel extends AbstractModel implements InterfaceProductsModel
{
    /**
     * get all products
     * @return array
     * @throws \Exception
     */
    public function getAll()
    {
        $sql = "SELECT * FROM `products`;";
        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * get  product by id
     * @param $id
     * @return array
     * @throws \Exception
     */
    public function get($id)
    {
        $sql = "SELECT * FROM `products` WHERE `id`={$id};";
        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * add product
     * @param $sku
     * @param $name
     * @param $price
     * @param $type_id
     * @return product_id|string_error
     */
    public function add($sku,$name,$price,$type_id)
    {
        $sql = "INSERT INTO `products` (sku,name,price,type_id) VALUES ('{$sku}','{$name}','{$price}','{$type_id}');";
        $result = $this->db->query($sql);
        return 'db insert (products  table): ' . ($result ? $this->db->insert_id : $this->db->error) . '</br>';
    }



}