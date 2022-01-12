<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="http://localhost/learning/php/practice/test2/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="template/css/bootstrap.min.css" rel="stylesheet">
        <link href="template/css/font-awesome.min.css" rel="stylesheet">
        <link href="template/css/prettyPhoto.css" rel="stylesheet">
        <link href="template/css/price-range.css" rel="stylesheet">
        <link href="template/css/animate.css" rel="stylesheet">
        <link href="template/css/main.css" rel="stylesheet">
        <link href="template/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>


    <?php include ROOT.'/views/layouts/header.php'; ?>



        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products">
                                <?php foreach ($categories as $categoryItem): ?>
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="category/<?php echo $categoryItem['id'] ?>"><?php echo $categoryItem['name'] ?></a></h4>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Последние товары</h2>

                            <?php foreach ($latestProducts as $product): ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                        
                                            <img src="<?php echo Product::getImage($product['id']) ?>" alt="" />
                                            <h2>$<?php echo $product['price']; ?></h2>
                                            <p>
                                                <a href="product/<?php echo $product['id'] ?>">
                                                    <?php echo $product['name'] ?>
                                                </a>
                                            </p>
                                            <a href="cart/add/<?php echo $product['id'] ?>" data-id="<?php echo $product['id'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($product['is_new']): ?>
                                            <img src="template/images/home/new.png" class="new">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                            

                        </div><!--features_items-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Рекомендуемые товары</h2>

                            <div class="cycle-slideshow" 
                                data-cycle-fx=carousel
                                data-cycle-timeout=5000
                                data-cycle-carousel-visible=3
                                data-cycle-carousel-fluid=true
                                data-cycle-slides="div.item"
                                data-cycle-prev="#prev"
                                data-cycle-next="#next"
                            >                        
                             <?php foreach ($recommendedProducts as $sliderItem): ?>
                            <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="template/images/home/product2.jpg" alt="" />
                                            <h2>$<?php echo $sliderItem['price']; ?></h2>
                                            <a href="product/<?php echo $sliderItem['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                            <br/><br/>
                                            <a href="cart/add/<?php echo $product['id'] ?>" data-id="<?php echo $product['id'] ?>"
                                                class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>">
                                                <i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                                <a id="prev" class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a id="next" class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>	
                    </div>
                               		
                            </div>
                        </div><!--/recommended_items-->
                    
                    </div>
                </div>
            </div>
        </section>
        <?php include ROOT.'/views/layouts/footer.php'; ?>
