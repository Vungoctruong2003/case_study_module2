<div class="container">
    <h3>Sửa sản phẩm</h3>
    <form method="post" enctype="multipart/form-data" action="">
        <div class="form-group">
            <label for="">Id Product</label>
            <input type="text" name="id" value="<?php echo $product['product_id'] ?>" required class="form-control"
                   disabled>
            <label for="">Name Product</label>
            <input type="text" name="name" value="<?php echo $product['product_name'] ?>" required class="form-control">
            <label for="">Size Product</label>
            <input type="text" name="size" value="<?php echo $product['product_size'] ?>" required class="form-control">
            <label for="">Price Product</label>
            <input type="number" name="price" value="<?php echo number_format($product['product_price']) ?>" required
                   class="form-control">
            <label for="">Image Product</label>
            <br>
            <td><img width="100" src="uploads/<?php echo $product['product_image'] ?>" alt=""></td>
            <input type="file" name="fileToUpload" value="" id="fileToUpload" required class="form-control">
            <label for="">Description Product</label>
            <input type="text" name="description" value="<?php echo $product['product_description'] ?>" required
                   class="form-control">
            <label for="">Category Product</label>
            <input type="text" name="category" value="<?php echo $product['product_category'] ?>" required
                   class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



