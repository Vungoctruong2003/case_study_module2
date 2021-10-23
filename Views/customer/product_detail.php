
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="card">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div>
                            <a href="#"><img src="uploads/<?php echo $product["product_image"] ?>" width="450px" height="450px"></a>
                        </div>
                    </div>
                </article>
            </aside>
            <aside class="col-sm-7">
                <article class="card-body p-5">
                    <h3 class="title mb-3">Thông tin của sản phẩm</h3>

                    <p class="price-detail-wrap">
	<span class="price h3 text-warning">
		<span class="num"><?php echo number_format( $product["product_price"]) ?></span><span class="currency">VND</span>
	</span>
                    </p>
                    <dl class="item-property">
                        <dt>Mô tả</dt>
                        <dd><p> <?php echo $product["product_description"] ?> </p></dd>
                    </dl>
                    <hr>
                    <div class="col-sm-7">
                        <dl class="param param-inline">
                            <dt>Size: <?php echo $product["product_size"] ?> </dt>
                        </dl>
                    </div>
                    <a href="#" class="btn btn-lg btn-primary text-uppercase"> Mua </a>
        </div>
        <hr>
        </article>
        </aside>
    </div>
</div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>




