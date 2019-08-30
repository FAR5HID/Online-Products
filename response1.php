<?php

include("connection.php");
 
$params = $_REQUEST;
$action = isset($params['action']) && $params['action'] !='' ? $params['action'] : 'list';
$prdCls = new Product();
 
switch($action) {
 case 'list':
  $prdCls->getProduct();
 break;
 default:
 return;
}
 
 
class Product {
  protected $conn;
  protected $data = array();
  function __construct() {

	$db = new dbObj();
	$connString =  $db->getConnstring();
    $this->conn = $connString;
  }
  
  function getProduct() {
    $sql = "SELECT * FROM product";
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch product data");
	$data = pg_fetch_all($queryRecords);
	echo json_encode($data);
  }
}
?>