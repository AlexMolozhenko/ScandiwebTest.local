<?php

namespace Model;

use Core\AbstractModel;

class TypeModel extends AbstractModel
{

    public function getAll(){
        $sql = "SELECT * FROM `type`;";
        $result = $this->db->query($sql);
//        if($this->db->errno !== 0  ){
//            throw new \Exception($this->db->error);
//        }
        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }
    public function add($id)
    {
        // TODO: Implement add() method.
    }
}