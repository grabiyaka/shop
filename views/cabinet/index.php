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
        <div class="contrainer">
            <div class="row">
                <h1>Кабинет твой</h1>
                <h2>Привет! <?php echo $user['name']; ?> </h2>
                <ul>
                    <li><a href="cabinet/edit">Редактировать данные</a></li>
                    <li><a href="user/history">Список покупок</a></li>
                </ul>
            </div>
        </div>
    </selection>
<?php include ROOT . '/views/loyauts/footer.php'; ?>
</body>
</html>