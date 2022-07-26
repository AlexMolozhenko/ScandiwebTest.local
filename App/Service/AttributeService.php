<?php

namespace Service;

use core\ServiceAbstract\AbstractService;

class AttributeService extends AbstractService
{
    /**
     * get id and attribute name for type with id
     * @param $typeId
     * @return array
     * @throws \Exception
     */
    public function getAttributeByTypeId($typeId){
        $result = $this->typeAttributeModel->get($typeId);
        return $result;
    }

}