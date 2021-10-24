<?php
include_once "Views/slide.php";
?>
<div class="product">
    <div class="row mt-3 ml-5 mr-5">
        <?php foreach ($products as $index => $product) : ?>
            <div class="col-3 mt-4 pr-2 pl-2">
                <div class="" style="width: 15rem;">
                    <a href="index.php?page=customer&action=product_detail_customer&id=<?php echo $product['product_id'] ?>">
                        <img src=" uploads/<?php echo $product["product_image"] ?>" class="rounded mx-auto d-block"
                             alt="..." width="250" height="250" style="margin-top: 20px">
                    </a>
                    <div class="">
                        <h5 class="card-title"><?php echo $product["product_name"] ?></h5>
                        <p class="card-text"> Giá: <?php echo number_format($product["product_price"])?> VND</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>