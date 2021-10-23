<?php

$action = $_GET['action'] ?? null;
$method = $_SERVER['REQUEST_METHOD'];
$id = $_GET['id'] ?? null;
$page = $_GET['page'] ?? null;
include_once "Views/admin/headerAdmin.php";

switch ($page) {
    case "admin":
        switch ($action) {
            case "add":
                include_once "Views/admin/add_Product.php";
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $name = $_POST["name"];
                    $size = $_POST["size"];
                    $price = $_POST["price"];
                    $description = $_POST["description"];
                    $category = $_POST["category"];
                    $img = $_FILES['fileToUpload']['name'];
                    $target_dir = "/Users/macos/Sites/My_Store/" . "uploads/" . $_FILES['fileToUpload']['name'];
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = true;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif") {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = false;
                    }
                    $file = $_FILES['fileToUpload']['tmp_name'];

                    if ($uploadOk == true) {
                        if (move_uploaded_file($file, $target_dir)) {
                            echo "Thêm sản phẩm thành công thành công";
                        }
                    } else {
                        echo "Tải tập tin thất bại";
                    }
                    $product = [
                        "product_name" => $name,
                        "product_size" => $size,
                        "product_price" => $price,
                        "product_description" => $description,
                        "product_category" => $category,
                        "product_image" => $img
                    ];
                    $adminController->addProduct($product);
                }
                break;
            case "product_list":
                $adminController->showList();
                include_once "Views/admin/list_product.php";
                break;
            case "delete":
                $adminController->removeProduct($id);
                break;
            case "edit":
                $adminController->showEditProductById($id);
                include_once "Views/admin/update_Product.php";
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $name = $_POST["name"];
                    $size = $_POST["size"];
                    $price = $_POST["price"];
                    $description = $_POST["description"];
                    $category = $_POST["category"];
                    $img = $_POST['img'];
                    $img = $_FILES['fileToUpload']['name'];
                    $target_dir = "/Users/macos/Sites/My_Store/" . "uploads/" . $_FILES['fileToUpload']['name'];
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = true;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif") {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = false;
                    }
                    $file = $_FILES['fileToUpload']['tmp_name'];

                    if ($uploadOk == true) {
                        if (move_uploaded_file($file, $target_dir)) {
                            echo "Thêm sản phẩm thành công thành công";
                        }
                    } else {
                        echo "Tải tập tin thất bại";
                    }
                    $product = [
                        "product_id" => $id,
                        "product_name" => $name,
                        "product_size" => $size,
                        "product_price" => $price,
                        "product_description" => $description,
                        "product_category" => $category,
                        "product_image" => $img
                    ];
                    $adminController->updateProduct($product);
                }
                break;
        }
}