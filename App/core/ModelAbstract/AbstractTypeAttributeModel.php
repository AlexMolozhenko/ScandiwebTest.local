<?php

namespace core\ModelAbstract;



abstract  class AbstractTypeAttributeModel extends AbstractModel
{

    /**
     * @inheritDoc
     */
    protected function getAll()
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param $id
     * @return array
     */
    protected function get($id)
    {
        // TODO: Implement get() method.
    }

    /**
     * @inheritDoc
     */
    protected function add($data)
    {
        // TODO: Implement add() method.
    }

    /**
     *
     * @param $typeId
     * @return array
     */
    abstract protected function getIdTypeAttributeByTypeId($typeId);
}