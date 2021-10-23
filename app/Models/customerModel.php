<?php

class customerModel
{
    private $pdo;

    public function __construct()
    {
        $database = new DBConnect("root", "truong2003@VNT");
        $this->pdo = $database->connect();
    }

    public function getAllProduct()
    {
        try {
            $sql = "SELECT * FROM products";
            $stmt = $this->pdo->query($sql);
            $products = $stmt->fetchAll();
            return ($products);
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }

    public function getProductById($id)
    {
        try {
            $sql = "SELECT * FROM products WHERE product_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch();

        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }
    public function searchByName($key)
    {
        try {
            $sql = "SELECT * FROM products WHERE product_name LIKE N'%$key%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }
    public function getPants()
    {
        try {
            $sql = "SELECT * FROM products WHERE product_category LIKE '%quần%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }
    public function getShirt()
    {
        try {
            $sql = "SELECT * FROM products WHERE product_category LIKE '%áo%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }

}