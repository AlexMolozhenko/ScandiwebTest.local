<?php

namespace Model;

use core\ImplementsModel\InterfaceProductsModel;
use core\ModelAbstract\AbstractModel;
use Exception\MySQLException;

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
     * add a product to the database without attributes. returns the product id
     * @param $sku
     * @param $name
     * @param $price
     * @param $type_id
     * @return int (product id)
     * @throws \Exception
     */
    public function add($sku,$name,$price,$type_id)
    {
        $sql = "INSERT INTO `products` (sku,name,price,type_id) VALUES ('{$sku}','{$name}','{$price}','{$type_id}');";
        $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new MySQLException($this->db->error);
        }else{
            return $this->db->insert_id;
        }

    }

    /**
     * delete product by id
     * @param $id
     * @return mixed|void
     * @throws \Exception
     */
    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `products`.`id` = {$id};";
        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result;

    }


}