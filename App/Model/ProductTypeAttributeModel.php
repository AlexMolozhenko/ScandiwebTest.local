<?php

namespace Model;


use core\ImplementsModel\InterfaceProductTypeAttributeModel;
use core\ModelAbstract\AbstractModel;

class ProductTypeAttributeModel extends AbstractModel implements InterfaceProductTypeAttributeModel
{
    public function getAll()
    {
        $sql = "SELECT `products_type_attribute`.`products_id` as `productId`,`attribute`.`name` as `attributeName`,`attribute`.`units` as `atributeUnits`,`products_type_attribute`.`value` as `attributeValue` FROM `products_type_attribute` INNER JOIN `type_attribute` ON `products_type_attribute`.`type_attribute_id` = `type_attribute`.`id` INNER JOIN `attribute` ON `type_attribute`.`attribute_id` = `attribute`.`id`;";
        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get($id)
    {
//        $sql = "SELECT `attribute`.`name` as `attributeName`,`attribute`.`units` as `atributeUnits`,`products_type_attribute`.`value` as `attributeValue` FROM `products_type_attribute` INNER JOIN `type_attribute` ON `products_type_attribute`.`products_id`=`$id` AND `products_type_attribute`.`type_attribute_id` = `type_attribute`.`id` INNER JOIN `attribute` ON `type_attribute`.`attribute_id`=`attribute`.`id`;";
//        $result = $this->db->query($sql);
//        if($this->db->errno !== 0  ){
//            throw new \Exception($this->db->error);
//        }
//        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * add product attributes
     * @param $products_id
     * @param $type_attribute_id
     * @param $value
     * @return string
     */
    public function add($products_id,$type_attribute_id,$value)
    {

        $sql = "INSERT INTO `products_type_attribute` (products_id,type_attribute_id,value) VALUES ({$products_id},{$type_attribute_id},{$value});";
        $result = $this->db->query($sql);
        return $result ? 'true' : $this->db->error;
    }

}