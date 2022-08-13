<?php


include_once "..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."configDB.php";



/**
 * connect DB
 */
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno!==0){
    exit($db->connect_error);
}

/**
 * filling with initial data
 */
$sql = "INSERT INTO type(name) values ('DVD'),('Book'),('Furniture');";
$result = $db->query($sql);
echo 'db insert (type  table): ' . ($result ? 'true' : $db->error) . '</br>';

/**
 * filling with initial data
 */
$sql = "INSERT INTO attribute (name,units) values ('Size', 'MB'),('Weight','KG'),('Height','CM'),('Width','CM'),('Length','CM');";
$result = $db->query($sql);
echo 'db insert (attribute  table): ' . ($result ? 'true' : $db->error) . '</br>';

/**
 * filling with initial data
 */
$sql = "INSERT INTO type_attribute(type_id,attribute_id) values (1,1),(2,2),(3,3),(3,4),(3,5);";
$result = $db->query($sql);
echo 'db insert (type_attribute  table): ' . ($result ? 'true' : $db->error) . '</br>';