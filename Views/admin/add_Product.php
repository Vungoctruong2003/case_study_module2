


<div class="container">
    <h3>Thêm sản phẩm mới</h3>
    <form method="post" enctype="multipart/form-data" action="">
        <div class="form-group">
            <label for="">Name Product</label>
            <input type="text" name="name" required class="form-control">
            <label for="">Size Product</label>
            <input type="text" name="size" required class="form-control">
            <label for="">Price Product</label>
            <input type="number" name="price" required class="form-control">
            <label for="">Image Product</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required class="form-control">
            <label for="">Description Product</label>
            <input type="text" name="description" required class="form-control">
            <label for="">Category Product</label>
            <input type="text" name="category" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
