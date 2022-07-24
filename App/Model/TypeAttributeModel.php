<?php

namespace Model;



use core\ImplementsModel\InterfaceTypeAttributeModel;
use core\ModelAbstract\AbstractModel;

class TypeAttributeModel extends AbstractModel implements InterfaceTypeAttributeModel
{

    public function getAll()
    {

        // TODO: Implement getAll() method.
    }

    /**
     * Get list with TypeAttribute_id and name of attribute BY id type
     * @param $id
     * @return array
     * @throws \Exception
     */
     public function get($id)
     {
         $sql = "SELECT `type_attribute`.`id` ,`attribute`.`name` FROM `type_attribute` INNER JOIN `attribute` ON `type_attribute`.`attribute_id` = `attribute`.`id` AND `type_attribute`.`type_id` = {$id};";

         $result = $this->db->query($sql);
         if($this->db->errno !== 0  ){
             throw new \Exception($this->db->error);
         }
         return $result->fetch_all(MYSQLI_ASSOC);
     }

     public function add()
     {
         // TODO: Implement add() method.
     }



}