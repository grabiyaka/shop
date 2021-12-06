<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://localhost/learning/php/practice/test2/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Товар</title>
        <link href="template/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="template/css/font-awesome.min.css" type="text/css" rel="stylesheet">
        <link href="template/css/prettyPhoto.css" type="text/css" rel="stylesheet">
        <link href="template/css/price-range.css" type="text/css" rel="stylesheet">
        <link href="template/css/animate.css" type="text/css" rel="stylesheet">
        <link href="template/css/main.css" type="text/css" rel="stylesheet">
        <link href="template/css/responsive.css" type="text/css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
    <?php include ROOT.'/views/loyauts/header.php'; ?>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Последние товары</h2>

                            <?php foreach ($latestProducts as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="template/images/home/product1.jpg" alt="" />
                                            <h2>$<?php echo $product['price']; ?></h2>
                                            <p>
                                                <a href="product/<?php echo $product['id'] ?>">
                                                    <?php echo $product['name'] ?>
                                                </a>
                                            </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($product['is_new']): ?>
                                            <img src="/template/images/home/new.png">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>

                        </div><!--features_items-->

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="template/images/product-details/1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <img src="template/images/product-details/new.jpg" class="newarrival" alt="" />
                                        <h2><?php echo $product['name']; ?></h2>
                                        <p>Код товара: <?php echo $product['code']; ?></p>
                                        <span>
                                            <span><?php echo $product['price']; ?></span>
                                            <label>Количество:</label>
                                            <input type="text" value="3" />
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>
                                        <p><b>Наличие:</b> На складе</p>
                                        <p><b>Состояние:</b> Новое</p>
                                        <p><b>Производитель:</b> D&amp;G</p>
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <p>Разнообразный и богатый опыт постоянный количественный рост и 
                                        сфера нашей активности требуют определения и уточнения направлений 
                                        прогрессивного развития. Таким образом реализация намеченных плановых 
                                        заданий требуют определения и уточнения форм развития.</p>
                                    <p>Повседневная практика показывает, что новая модель организационной 
                                        деятельности способствует подготовки и реализации позиций, занимаемых 
                                        участниками в отношении поставленных задач. Таким образом постоянное 
                                        информационно-пропагандистское обеспечение нашей деятельности влечет 
                                        за собой процесс внедрения и модернизации форм развития.</p>
                                    <p>Повседневная практика показывает, что новая модель организационной 
                                        деятельности способствует подготовки и реализации позиций, занимаемых 
                                        участниками в отношении поставленных задач. Таким образом постоянное 
                                        информационно-пропагандистское обеспечение нашей деятельности влечет 
                                        за собой процесс внедрения и модернизации форм развития.</p>
                                    <p>Повседневная практика показывает, что новая модель организационной 
                                        деятельности способствует подготовки и реализации позиций, занимаемых 
                                        участниками в отношении поставленных задач. Таким образом постоянное 
                                        информационно-пропагандистское обеспечение нашей деятельности влечет 
                                        за собой процесс внедрения и модернизации форм развития.</p>
                                </div>
                            </div>
                        </div><!--/product-details-->

                    </div>
                </div>
            </div>
        </section>
        
        <?php include ROOT.'/views/loyauts/footer.php'; ?>