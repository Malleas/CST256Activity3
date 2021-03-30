<?php


class CustomerDAO
{
    private $conn;

    /**
     * CustomerDAO constructor.
     */
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addCustomer($firstName, $lastName){
        $query = "Insert into CUSTOMERS (FIRST_NAME, LAST_NAME) VALUE (?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $firstName, $lastName);
        if($stmt->execute()){
            return 1;
        }else{
            return 0;
        }
    }

}