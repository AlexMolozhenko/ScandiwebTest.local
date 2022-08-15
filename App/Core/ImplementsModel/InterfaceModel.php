<?php

namespace core\ImplementsModel;

interface InterfaceModel
{
    /**
     * @return array
     */
    public function getAll();

    /**
     * @param $id
     * @return array
     */
     public function get($id);


}




