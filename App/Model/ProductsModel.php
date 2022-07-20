<?php

namespace Model;





use core\ModelAbstract\AbstractProductsModel;

class ProductsModel extends AbstractProductsModel
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
     * add a new product
     * @param array $data
     * @return string
     */
    public function add($data)
    {
        extract($data);
        $sql = "INSERT INTO `products` (sku,name,price,type_id) VALUES ('{$sku}','{$name}','{$price}','{$type_id}');";
        $result = $this->db->query($sql);
        return 'db insert (products  table): ' . ($result ? 'true' : $this->db->error) . '</br>';
    }



}