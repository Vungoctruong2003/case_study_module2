<?php

class adminModel
{
    private $pdo;

    public function __construct()
    {
        $database = new DBConnect("root", "truong2003@VNT");
        $this->pdo = $database->connect();
    }
    public function addUser($user){
        $sql = "INSERT INTO user (user_name,user_email, user_phone, user_address,user_account,user_password,user_role)
VALUES (:user_name,:user_email,:user_phone,:user_address,:user_account,:user_password,:user_role)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam("user_name", $user['user_name']);
        $stmt->bindParam("user_email", $user['user_email']);
        $stmt->bindParam("user_phone", $user['user_phone']);
        $stmt->bindParam("user_address", $user['user_address']);
        $stmt->bindParam("user_account", $user['user_account']);
        $stmt->bindParam("user_password", $user['user_password']);
        $stmt->bindParam("user_role", $user['user_role']);
        $stmt->execute();
    }
    public function login($account, $password)
    {
        $sql = "SELECT * FROM user WHERE user_account=? and user_password =?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $account);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function addProduct($product){
        try {
            $sql = "INSERT INTO products (product_name,product_size,product_price,product_image,product_description,product_category) VALUES (:name ,:size,:price,:image,:description,:category)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":name", $product['product_name']);
            $stmt->bindParam(":size", $product['product_size']);
            $stmt->bindParam(":price", $product['product_price']);
            $stmt->bindParam(":image", $product['product_image']);
            $stmt->bindParam(":description", $product['product_description']);
            $stmt->bindParam(":category", $product['product_category']);
            $stmt->execute();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
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
    public function deleteProduct($id)
    {
        try {
            $sql = "DELETE FROM products WHERE product_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
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

    public function editProduct($product)
    {
        try {
            $sql = "UPDATE products
SET  product_name = :name,product_size =:size,product_price = :price,product_image = :img,product_description = :description,product_category = :category
WHERE product_id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id", $product['product_id']);
            $stmt->bindParam(":name", $product['product_name']);
            $stmt->bindParam(":size", $product['product_size']);
            $stmt->bindParam(":price", $product['product_price']);
            $stmt->bindParam(":img", $product['product_image']);
            $stmt->bindParam(":description", $product['product_description']);
            $stmt->bindParam(":category", $product['product_category']);
            $stmt->execute();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }

    }

}