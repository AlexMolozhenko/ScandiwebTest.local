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
//        $sql = "SELECT `products`.`id` as `productId`,`products`.`sku` as `productSku`,`products`.`name` as `productName`,`products`.`price`,`products`.`currency`,`attribute`.`name` as `attributeName`,`attribute`.`units` as `atributeUnits`,`products_type_attribute`.`value` as `attributeValue` FROM `products` INNER JOIN  `products_type_attribute` ON `products_type_attribute`.`products_id`=`products`.`id`INNER JOIN `type_attribute` ON `type_attribute`.`id`=`products_type_attribute`.`type_attribute_id` INNER JOIN `attribute` ON `type_attribute`.`attribute_id`=`attribute`
//.`id`;";
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
//        $sql = "SELECT * FROM `products` WHERE `id`={$id};";
//        $result = $this->db->query($sql);
//        if($this->db->errno !== 0  ){
//            throw new \Exception($this->db->error);
//        }
//        return $result->fetch_all(MYSQLI_ASSOC);
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



}