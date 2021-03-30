<?php


class OrdersDAO
{
    private $conn;

    /**
     * OrdersDAO constructor.
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addOrder($product){
        $query = "Insert into ORDERS (PRODUCT) value (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $product);
        if($stmt->execute()){
            return 1;
        }else{
            return 0;
        }
    }
}