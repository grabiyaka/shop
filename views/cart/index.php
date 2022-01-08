<header>

</header>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/learning/php/practice/test2/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/font-awesome.min.css" rel="stylesheet">
    <link href="template/css/prettyPhoto.css" rel="stylesheet">
    <link href="template/css/price-range.css" rel="stylesheet">
    <link href="template/css/animate.css" rel="stylesheet">
    <link href="template/css/main.css" rel="stylesheet">
    <link href="template/css/responsive.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php include ROOT. '/views/layouts/header.php' ?>
<section>
    <div class="container">
        <div class="row">
            <!-- <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                        <div class="panel panel-heading">
                            <div class="panel panel-default">
                                <h4 class="panel-title">
                                    <a href="/category/<?php echo $categoryItem['id']; ?>">
                                        <?php echo $categoryItem['name'] ?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div> -->

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>
                    <?php if ($productsInCart): ?>
                        <p> Вы выбрали такие товары </p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Код товара</th>
                                <th>Название</th>
                                <th>Стоимость</th>
                                <th>Количество, шт</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code']; ?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id']; ?>">
                                            <?php echo $product['name']; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price']; ?></td>
                                    <td><?php echo $productsInCart[$product['id']]; ?></td>
                                    <td><a href="cart/delete/<?php echo $product['id'] ?>">X</a></td>
                                </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td>общая стоимость:</td>
                                    <td><?php echo $totalPrice; ?></td>
                                </tr>
                             
                        </table>
                        <a class="btn btn-default checkout" href="cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                        <?php else: ?>
                            <p>Корзина пуста</p>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php require_once(ROOT.'/views/layouts/footer.php') ?>
