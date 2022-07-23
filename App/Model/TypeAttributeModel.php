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
     public function get($id)
     {
         // TODO: Implement get() method.
     }

    /**
     * Get list with TypeAttribute_id and name of attribute BY id type
     * @param $typeId
     * @return array
     * @throws \Exception
     */
    public function getIdTypeAttributeByTypeId($typeId)
    {
        $sql = "SELECT `type_attribute`.`id` ,`attribute`.`name` FROM `type_attribute` INNER JOIN `attribute` ON `type_attribute`.`attribute_id` = `attribute`.`id` AND `type_attribute`.`type_id` = {$typeId};";

        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }



}