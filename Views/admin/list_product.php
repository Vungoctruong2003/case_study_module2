<table class="table" style="width: 500px">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Kích thước</th>
        <th scope="col">Giá sản phẩm</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Mô tả</th>
        <th scope="col">Thể loại</th>
        <th scope="col" colspan="2">Action</th>

    </tr>
    </thead>
    <tbody>

    <?php foreach ($products as $index => $product) : ?>
        <tr>
            <td scope="row"><?php echo $index + 1 ?></td>
            <td><?php echo $product['product_name'] ?></td>
            <td><?php echo $product['product_size'] ?></td>
            <td><?php echo number_format($product['product_price']) ?></td>
            <td><img src="uploads/<?php echo $product["product_image"] ?>" class="rounded mx-auto d-block" alt="..."
                     width="50" height="50" style="margin-top: 20px"></td>
            <td><?php echo $product['product_description'] ?></td>
            <td><?php echo $product['product_category'] ?></td>
            <td>
                <a onclick="return confirm('Are you sure?')"
                   href="index.php?page=admin&action=delete&id=<?php echo $product['product_id'] ?>" type="button"
                   class="btn btn-danger"> Delete</a>
            </td>
            <td>
                <a href="index.php?page=admin&action=edit&id=<?php echo $product['product_id'] ?>" type="button"
                   class="btn btn-warning"> Update</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <td><a href="index.php?page=admin&action=add" class="btn btn-success">ADD NEW</a>
    </td>
    </tbody>
</table>

