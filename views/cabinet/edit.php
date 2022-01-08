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
<?php include ROOT . '/views/layouts/header.php'; ?>

    <selection>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 padding-right">

                    
                    <?php if ($result): ?>
                        <p>Данные отредактированы!</p>
                    <?php else: ?>
                    
                        <?php if (isset($errors) && is_array($errors)): ?>

                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach ?>
                            </ul>

                        <?php endif ?>

                        <div class="signup-form">
                            <h2>Редактировать данные</h2>
                            <form action="" method="post">
                                <p>Имя:</p>
                                <input type="text" name="name" placeholder="Имя" value="<?php echo $name ?>">
                                <p>Пароль:</p>
                                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password ?>">
                                <br>
                                <input type="submit" name="submit" class="btn btn-defalt" value="Сохранить">
                            </form>
                        </div>

                    <?php endif ?>

                    <br><br>

                </div>
            </div>
        </div>
    </selection>

    <?php include ROOT . '/views/layouts/footer.php' ?>
</body>
</html>