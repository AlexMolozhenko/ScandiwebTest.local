<?php

namespace core\ModelAbstract;
//TODO
//include_once "..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."configDB.php";

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
        //TODO
//        $this->db = new \mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//        if($this->db->connect_errno !==0){
//            throw new \Exception($this->db->connect_errno);
//        }
    }
}