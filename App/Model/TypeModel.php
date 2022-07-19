<?php

namespace Model;

use Core\AbstractModel;

class TypeModel extends AbstractModel
{
    /**
     * get all types
     * @return array|mixed
     * @throws \Exception
     */
    public function getAll(){
        $sql = "SELECT * FROM `type`;";
        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);

    }

    /**
     * get type by id
     * @param $id
     * @return mixed
     * @throws \Exception
     */
    public function get($id)
    {
        $sql = "SELECT `name` FROM `type` WHERE `id`={$id};";
        $result = $this->db->query($sql);
        if($this->db->errno !== 0  ){
            throw new \Exception($this->db->error);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function add($data)
    {
        // TODO: Implement add() method.
    }
}