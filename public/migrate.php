<?php


include_once "../config/configDB.php";

/**
 * connect DB
 */
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno!==0){
    exit($db->connect_error);
}
/**
 * CREATE TABLE types
 */
$sql = "CREATE TABLE type (id int (50) not null , name varchar(50),   PRIMARY KEY(id) );";
$result = $db->query($sql);
echo 'db structure (types  table): ' . ($result ? 'true' : $db->error) . '</br>';

/**
 * CREATE TABLE attributes
 */
$sql ="CREATE TABLE attribute (id int (50) not null , name varchar(50),  PRIMARY KEY(id));";
$result = $db->query($sql);
echo 'db structure (attribute  table): ' . ($result ? 'true' : $db->error) . '</br>';

/**
 * CREATE TABLE products
 */
$sql ="CREATE TABLE products ( id int (50) not null ,sku varchar(80) unique , name varchar(100),price decimal(20),type_id int (50) ,  PRIMARY KEY(id), FOREIGN KEY (type_id) REFERENCES type(id));";

$result = $db->query($sql);
echo 'db structure (product  table): ' . ($result ? 'true' : $db->error) . '</br>'.
  '</br>';

/**
 * CREATE TABLE type_attribute
 */
$sql = "CREATE TABLE type_attribute (id int (50) not null , type_id int (50) , attribute_id int (50) ,PRIMARY KEY(id),FOREIGN KEY (type_id) REFERENCES type(id) , FOREIGN KEY (attribute_id) REFERENCES attribute(id)) ;";
$result = $db->query($sql);
echo 'db structure (type_attribute  table): ' . ($result ? 'true' : $db->error) . '</br>';

/**
 * CREATE TABLE product_type_attribute
 */
$sql = "CREATE TABLE products_type_attribute (id int (50) not null ,  products_id int(50) ,type_attribute_id int(50) ,value int (20),  PRIMARY KEY(id),FOREIGN KEY (products_id) REFERENCES products(id),FOREIGN KEY (type_attribute_id) REFERENCES type_attribute(id)) ;";
$result = $db->query($sql);
echo 'db structure (products_type_attribute  table): ' . ($result ? 'true' : $db->error) . '</br>';