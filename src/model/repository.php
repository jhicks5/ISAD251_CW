<?php

include_once 'customer.php';
session_start();
$_SESSION["currentCustID"];
$_SESSION["currentOrderID"];
$_SESSION["orderStarted"];

class repository
{
    private $db_server = 'Proj-mysql.uopnet.plymouth.ac.uk';
    private $dbUser = 'ISAD251_JHicks';
    private $dbPassword = 'ISAD251_22205328';
    private $dbDatabase = 'ISAD251_JHicks';
    private $dataSourceName;
    private $connection;

    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        try {
            if ($this->connection === null) {
                $this->dataSourceName = 'mysql:dbname=' . $this->dbDatabase . ';host=' . $this->db_server;
                $this->connection = new PDO($this->dataSourceName, $this->dbUser, $this->dbPassword);
                $this->connection->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
            }
        }catch (PDOException $err)
        {
            echo 'Connection failed: ', $err->getMessage();
        }
    }
    public function getAll($tableName)
    {
        $sql = "SELECT * FROM ";
        switch ($tableName)
        {
            case "Products-Drinks" : $sql = $sql." Products WHERE Is_Drink = '1'";
                break;
            case "Products-Food" : $sql = $sql." Products WHERE Is_Drink = '0'";
                break;
            case "Customers" : $sql = $sql." Customers";
                break;
            case "Orders" : $sql = $sql." Orders";
                break;
            case "CustOrders" : $sql = $sql."Orders WHERE CustomerId = '{$_SESSION["currentCustID"]}'";
                break;
            case "OrderDetails" : $sql = $sql."orderdetails WHERE OrderId = '{$_SESSION["currentOrderID"]}'";
                break;
        }

        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $resultSet;
    }

    public function createOrder($tableName)
    {
        $curDate = date("Y-m-d");
        $sql = "INSERT INTO ";
        switch($tableName)
        {
            case "Orders" : $sql = $sql."Orders (OrderDate, CustomerId) VALUES('{$curDate}', '{$_SESSION["currentCustID"]}')";
        }

        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

}