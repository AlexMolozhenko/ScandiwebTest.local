<?php

namespace core\ModelAbstract;

include_once "../config/configDB.php";

abstract class AbstractModel
{
    /**
     *  database
     * @var \mysqli
     */
    public $db;

    /**
     * database connection
     * @throws \Exception
     */
    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if($this->db->connect_errno !==0){
            throw new \Exception($this->db->connect_errno);
        }
    }

    /**
     * @return array
     */
    abstract protected function getAll();

    /**
     * @param $id
     * @return array
     */
    abstract protected function get($id);

    /**
     * @param $data
     * @return mixed
     */
    abstract protected function add($data);



}