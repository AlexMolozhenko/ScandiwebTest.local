<?php

namespace Model;

use Core\AbstractModel;

class AttributeModel extends AbstractModel
{

    /**
     * get all  attributes
     * @return array
     * @throws \Exception
     */
    public function getAll()
    {
        $sql = "SELECT * FROM `attribute`;";
        $result = $this->db->query($sql);
        if($this->db->errno !==0 ){
            throw new \Exception($this->db->errno);
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * get attribute by id
     * @param $id
     * @return array
     * @throws \Exception
     */
    public  function get($id)
    {
        $sql = "SELECT `name` FROM `attribute` WHERE `id`={$id};";
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