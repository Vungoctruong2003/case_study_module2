

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php"><img height="40px" width="50px" src="<?php echo "https://storage.googleapis.com/cdn.nhanh.vn/store/3138/logo_1615426885_logo-yody.png"?>"></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=customer&action=pants">Quần</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=customer&action=shirts">Áo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="SignUp.php">Đăng kí</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Đăng nhập</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Đăng Xuất</a>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0" action="index.php">
            <input type="hidden" name="action" value="search">
            <input type="hidden" name="page" value="customer">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="key">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
    </div>
</nav>

