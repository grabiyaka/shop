<?php 

class AdminProductController extends AdminBase
{

    public function actionIndex()
    {
        
        self::checkAdmin();

        $productsList = Product::getProductsList();

        require_once(ROOT.'/views/admin_product/index.php');
        return true;

    }

    public function actionCreate()
    {
        self::checkAdmin();

        $categoriesList = Category::getCategoriesListAdmin();

        if(isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];
            // Флаг ошибок в форме
            $errors = false;
            
            if(!isset($options['name']) || empty($options['name'])) {
                $errors = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый товар
                $id = Product::createProduct($options);

                d($id);

                // Если запись добавлена
                if ($id) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']. '/learning/php/practice/test2' . "/upload/images/products/{$id}.jpg");
                    }
                };

                //header("Location: http://localhost/learning/php/practice/test2/admin/product");

            }
        }
            require_once(ROOT . '/views/admin_product/create.php');
            return true;

        
    }

    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретной категории
        // $category = Category::getCategoryById($id);

        $categoriesList = Category::getCategoriesListAdmin();

        $product = Product::getProductById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена   
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['status'] = $_POST['status'];
            $options['price'] = $_POST['price'];
            $options['brand'] = $_POST['brand'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];



            if(Product::updateProductById($id, $options)){
               
                if(is_uploaded_file($_FILES['image']['tmp_name'])){
                    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/product");
                }
            }

            header("Location:  http://localhost/learning/php/practice/test2/admin/product");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_product/update.php');
        return true;
    }

    public function actionDelete($id)
    {

        self::checkAdmin();

        if(isset($_POST['submit'])) {
            Product::deleteProductById($id);

            header("Location: learning/php/practice/test2/admin/product");
        }

        require_once(ROOT.'/views/admin_product/delete.php');
        return true;

    }
}