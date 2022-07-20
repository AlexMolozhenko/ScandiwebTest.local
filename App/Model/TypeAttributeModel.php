<?php

namespace Model;



use core\ModelAbstract\AbstractTypeAttributeModel;

class TypeAttributeModel extends AbstractTypeAttributeModel
{

    /**
     * get attribute  list by type id
     * @param   $id
     * @return array
     * @throws \Exception
     */
    public function get($id)
    {
        $sql = " SELECT * FROM `attribute` WHERE `id` in (SELECT `attribute_id`  FROM `type_attribute` WHERE `type_id`={$id} );";
        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getIdTypeAttributeByTypeId($typeId)
    {
        $sql="SELECT `id` FROM `type_attribute` WHERE type_id ={$typeId};";
        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }



}