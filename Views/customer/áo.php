<div class="product">
    <div class="row mt-3">
        <?php foreach ($products as $index => $product) : ?>
            <div class="col-ms-3 mt-4 mr-4">
                <div class="card" style="width: 18rem;" >
                    <img src="uploads/<?php echo $product["product_image"] ?>" class="rounded mx-auto d-block" alt="..." width="200" height="200" style="margin-top: 20px">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product["product_name"] ?></h5>
                        <p class="card-text"> <?php echo number_format($product["product_price"]) ?></p>
                        <a href="index.php?page=customer&action=product_detail_customer&id=<?php echo $product['product_id'] ?>" class="btn btn-success" >Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>