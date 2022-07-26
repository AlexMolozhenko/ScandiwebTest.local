<?php

namespace Service;

use core\ServiceAbstract\AbstractService;

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


}