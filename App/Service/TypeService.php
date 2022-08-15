<?php

namespace Service;

use Core\ServiceAbstract\AbstractService;

class TypeService extends AbstractService
{
    /**
     * get all types of products
     * @return array|mixed
     * @throws \Exception
     */
    public function getAll(){
        $result = $this->typeModel->getAll();
        return $result;
    }

    /**
     * get type name by id
     * @param $typeId
     * @return mixed
     * @throws \Exception
     */
    public function getId($typeId){
        $result = $this->typeModel->get($typeId);
        return $result;
    }


}