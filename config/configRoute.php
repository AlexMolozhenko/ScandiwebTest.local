<?php

const DEFAULT_CONTROLLER_NAME= 'ProductList' ;

const DEFAULT_ACTION_NAME = 'index';

/**
 * converts the first letter to capital
 * @param $str
 * @param string $encoding
 * @return string
 */
function mb_ucfirst($str, $encoding = 'UTF-8'){
    return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) . mb_strtolower(mb_substr($str, 1, mb_strlen($str), $encoding), $encoding);
}