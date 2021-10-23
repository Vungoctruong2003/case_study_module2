<?php

class customerController
{
    protected $customerModel;

    public function __construct()
    {
        $this->customerModel = new customerModel();
    }

    function showList()
    {
        $products = $this->customerModel->getAllProduct();
        include_once "Views/customer/Product_List.php";
    }

    function showDetailProduct($id)
    {
        $product = $this->customerModel->getProductById($id);
        include_once "Views/customer/product_detail.php";
    }

    function searchByName($key)
    {
        $products = $this->customerModel->searchByName($key);
        include_once "Views/customer/search.php";
    }

    function getPants()
    {
        $products = $this->customerModel->getPants();
        include_once "Views/customer/quần.php";
    }

    function getShirts()
    {
        $products = $this->customerModel->getShirt();
        include_once "Views/customer/áo.php";
    }



}