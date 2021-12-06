<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost/learning/php/practice/test2/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="template/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/css/font-awesome.min.css" rel="stylesheet">
    <link href="template/css/prettyPhoto.css" rel="stylesheet">
    <link href="template/css/price-range.css" rel="stylesheet">
    <link href="template/css/animate.css" rel="stylesheet">
    <link href="template/css/main.css" rel="stylesheet">
    <link href="template/css/responsive.css" rel="stylesheet">
</head>
<body>
<?php include ROOT . '/views/loyauts/header.php'; ?>

    <selection>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 padding-right">

                    <?php if (isset($errors) && is_array($errors)): ?>
                        
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach ?>
                        </ul>

                    <?php endif ?>

                    <div class="sinup-form">
                        <h2>Вход на сайт</h2>
                        <form method="post">
                            <input type="email" name="email" value="<?php echo $email ?>">
                            <input type="password" name="password" value="<?php echo $password ?>">
                            <input type="submit" name="submit" value="submit" class="btn btn-default">
                        </form>
                    </div>
                    <br><br>

                </div>
            </div>
        </div>
    </selection>

    <?php include ROOT . '/views/loyauts/footer.php' ?>
</body>
</html>