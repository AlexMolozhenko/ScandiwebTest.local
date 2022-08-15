<?php

namespace Core\ImplementsModel;

interface InterfaceProductsModel extends InterfaceModel
{


    /**
     * @param $sku
     * @param $name
     * @param $price
     * @param $type_id
     * @return mixed
     */
    public function add($sku,$name,$price,$type_id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);



}