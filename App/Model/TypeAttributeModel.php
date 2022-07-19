<?php

namespace Model;

use Core\AbstractModel;

class TypeAttributeModel extends AbstractModel
{

    /**
     * get attribute list by type id
     * @param type  $id
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

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }


    public function add($data)
    {
        // TODO: Implement add() method.
    }

}