<?php
$action = $_GET['action'] ?? null;
$method = $_SERVER['REQUEST_METHOD'];
$id = $_GET['id'] ?? null;
$page = $_GET['page'] ?? null;

switch ($page) {
    case 'customer':
        switch ($action) {
            case "product_detail_customer":
                include_once "Views/customer/headerCustomer.php";
                $customerController->showDetailProduct($id);
                include_once "Views/footer.php";
                break;
            case "search":
                include_once "Views/customer/headerCustomer.php";
                include_once "Views/slide.php";
                $key = $_REQUEST['key'];
                $customerController->searchByName($key);
                include_once "Views/footer.php";
                break;
            case "pants":
                include_once "Views/customer/headerCustomer.php";
                include_once "Views/slide.php";
                $customerController->getPants();
                include_once "Views/footer.php";
                break;
            case "shirts":
                include_once "Views/customer/headerCustomer.php";
                include_once "Views/slide.php";
                $customerController->getShirts();
                include_once "Views/footer.php";
                break;
            case "buy":
                include_once "Views/customer/Buy.php";
        }
        break;

    default:
        include_once "Views/customer/headerCustomer.php";
        $customerController->showList();
        include_once "Views/footer.php";
}
