<?php
require_once '../../../Autoloader.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$product = $_POST['product'];
$service = new OrderService();

$service->createOrder($firstName, $lastName, $product);
