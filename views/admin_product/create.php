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


            <h4>Добавить новую категорию</h4>

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
                    <form action="" method="post" enctype="multipart/form-data">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="">

                        <!-- <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="" value=""> -->

                        <p>Стоимость</p>
                        <input type="text" name="price">

                        <p>Код товара</p>
                        <input type="text" name="code">

                        <p>Производитель</p>
                        <input type="text" name="brand">

                        <p>Изображение товара</p>
                        <input type="file" name="image">

                        <p>Детальное описание</p>
                        <textarea name="description"></textarea>

                        <br><br>
                        <p>Категория</p>
                        <select name="category_id" id="">
                            <?php if(is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id'] ?>">
                                        <?php echo $category['name']; ?>
                                    </option>                           
                                <?php endforeach; ?> 
                            <?php endif; ?>
                        </select>
                        <br><br>
                        <p>Наличие на складе</p>
                        <select name="availability">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыта</option>
                        </select>
                        <br><br>
                        <p>Новинка</p>
                        <select name="is_new">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыта</option>
                        </select>
                        <br><br>
                        <p>Рекомендуемые</p>
                        <select name="is_recommended">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыта</option>
                        </select>
                        <br><br>
                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыта</option>
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