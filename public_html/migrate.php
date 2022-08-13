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
 * CREATE TABLE types
 */
$sql = "CREATE TABLE type (id int unsigned auto_increment , name varchar(50) unique,   PRIMARY KEY(id) );";
$result = $db->query($sql);
echo 'db structure (types  table): ' . ($result ? 'true' : $db->error) . '</br>';

/**
 * CREATE TABLE attributes
 */
$sql ="CREATE TABLE attribute (id int unsigned auto_increment, name varchar(50) unique, units varchar(20),  PRIMARY KEY(id));";
$result = $db->query($sql);
echo 'db structure (attribute  table): ' . ($result ? 'true' : $db->error) . '</br>';

/**
 * CREATE TABLE products
 */
$sql ="CREATE TABLE products ( id int unsigned auto_increment ,sku varchar(80) unique , name varchar(100),price DECIMAL(20,2),currency varchar (10) DEFAULT '$',type_id int unsigned,  PRIMARY KEY(id), FOREIGN KEY (type_id) REFERENCES type(id));";

$result = $db->query($sql);
echo 'db structure (product  table): ' . ($result ? 'true' : $db->error) . '</br>'.
  '</br>';

/**
 * CREATE TABLE type_attribute
 */
$sql = "CREATE TABLE type_attribute (id int unsigned auto_increment, type_id int unsigned , attribute_id int unsigned ,PRIMARY KEY(id),FOREIGN KEY (type_id) REFERENCES type(id) , FOREIGN KEY (attribute_id) REFERENCES attribute(id)) ;";
$result = $db->query($sql);
echo 'db structure (type_attribute  table): ' . ($result ? 'true' : $db->error) . '</br>';

/**
 * CREATE TABLE product_type_attribute
 */
$sql = "CREATE TABLE products_type_attribute (id int unsigned auto_increment,  products_id int unsigned ,type_attribute_id int unsigned ,value varchar (50),  PRIMARY KEY(id),UNIQUE(products_id,type_attribute_id),FOREIGN KEY (products_id) REFERENCES products(id),FOREIGN KEY (type_attribute_id) REFERENCES type_attribute(id)) ;";
$result = $db->query($sql);
echo 'db structure (products_type_attribute  table): ' . ($result ? 'true' : $db->error) . '</br>';