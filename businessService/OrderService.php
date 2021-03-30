<?php


class OrderService
{
    public function createOrder($firstName, $lastname, $product){
        $db = new Database();
        $conn = $db->getConnection();
        $customerService = new CustomerDAO($conn);
        $orderService = new OrdersDAO($conn);
        $conn->autocommit(false);
        $conn->begin_transaction();
        $customerStatus = $customerService->addCustomer($firstName, $lastname);
        $orderStatus = $orderService->addOrder($product);
        if($customerStatus == 1 && $orderStatus == 1){
            $conn->commit();
            echo "Transaction complete, thanks for the order!"."</br>";
        }else{
            $conn->rollback();
            echo "There was a problem with your order"."</br>";
        }
    }
}