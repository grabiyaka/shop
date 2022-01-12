<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="admin">Админпанель</a></li>
                    <li><a href="admin/order">Управление категориями</a></li>
                    <li class="active">Добавить категорию</li>
                </ol>
            </div>


            <h4>Редактировать товар <?php echo $id ?></h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name'] ?>">

                        <!-- <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="" value=""> -->

                        <p>Стоимость</p>
                        <input type="text" name="price" value="<?php echo $product['price'] ?>">

                        <p>Код товара</p>
                        <input type="text" name="code">


                        <p>Производитель</p>
                        <input type="text" name="brand" value="<?php echo $product['brand'] ?>">

                        <p>Изображение товара</p>
                        <input type="file" name="image" value="<?php echo $product['image'] ?>">

                        <p>Детальное описание</p>
                        <textarea name="description" value="<?php echo $product['description'] ?>"></textarea>

                        <br><br>
                        <p>Категория</p>
                        <select name="category_id" id="">
                            <?php if(is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id'] ?>">
                                    <?php if ($product['category_id'] == $category['id']) echo ' selected ="selected" ' ?>
                                        <?php echo $category['name']; ?>
                                    </option>                           
                                <?php endforeach; ?> 
                            <?php endif; ?>
                        </select>
                        <br><br>
                        <p>Наличие на складе</p>
                        <select name="availability" value="<?php echo $product['availability'] ?>">
                            <option value="1"  <?php if ($product['availability'] == 1) echo ' selected ="selected" ' ?> >Отображается</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected ="selected" ' ?> >Скрыта</option>
                        </select>
                        <br><br>
                        <p>Новинка</p>
                        <select name="is_new" value="<?php echo $product['is_new'] ?>">
                            <option value="1"  <?php if ($product['is_new'] == 1) echo ' selected ="selected" ' ?> >Отображается</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected ="selected" ' ?> >Скрыта</option>
                        </select>
                        <br><br>
                        <p>Рекомендуемые</p>
                        <select name="is_recommended" value="<?php echo $product['is_recommended'] ?>">
                            <option value="1"  <?php if ($product['is_recommended'] == 1) echo ' selected ="selected" ' ?> >Отображается</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected ="selected" ' ?> >Скрыта</option>
                        </select>
                        <br><br>
                        <p>Статус</p>
                        <select name="status" value="<?php echo $product['status'] ?>">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected ="selected" ' ?>>Отображается</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected ="selected" ' ?>>Скрыта</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>