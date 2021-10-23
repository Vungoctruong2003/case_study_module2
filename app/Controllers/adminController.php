<?php

class adminController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new adminModel();
    }

    public function addUser($user)
    {
        $this->adminModel->addUser($user);
        header("location: login.php");
    }
    public function addProduct($product){
        $this->adminModel->addProduct($product);
    }
    function showList()
    {
        $products = $this->adminModel->getAllProduct();
        include_once "Views/admin/list_product.php";
    }
    function removeProduct($id)
    {
        $this->adminModel->deleteProduct($id);
        header("location:index.php?page=admin&action=product_list");
    }


    function showEditProductById($id)
    {
        $product = $this->adminModel->getProductById($id);
        include_once "Views/admin/update_Product.php";
    }

    function updateProduct($product)
    {
        $this->adminModel->editProduct($product);
        header("location:index.php?page=admin&action=product_list");

    }
}