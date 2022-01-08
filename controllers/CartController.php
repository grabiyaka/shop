<?php 

class CartController{

    public function actionAdd($id){
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }

    public function actionDelete($id)
    { 
        unset($_SESSION['products'][$id]);
        header("Location: ../");
    }


    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;

        $productsInCart = Cart::getProducts();

        if($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);
        }
        
        require_once(ROOT.'/views/cart/index.php');
        
        return true;
    }

    public function actionCheckout()
    {

           // Получием данные из корзины      
           $productsInCart = Cart::getProducts();

           // Если товаров нет, отправляем пользователи искать товары на главную
           if ($productsInCart == false) {
               header("Location: http://localhost/learning/php/practice/test2/");
           }
   
           // Список категорий для левого меню
           $categories = Category::getCategoriesList();
   
           // Находим общую стоимость
           $productsIds = array_keys($productsInCart);
           $products = Product::getProdustsByIds($productsIds);
           $totalPrice = Cart::getTotalPrice($products);
   
           // Количество товаров
           $totalQuantity = Cart::countItems();
   
           // Поля для формы
           $userName = false;
           $userPhone = false;
           $userComment = false;
   
           // Статус успешного оформления заказа
           $result = false;
   
           // Проверяем является ли пользователь гостем
           if (!User::isGuest()) {
               // Если пользователь не гость
               // Получаем информацию о пользователе из БД
               $userId = User::checkLogged();
               $user = User::getUserById($userId);
               $userName = $user['name'];
           } else {
               // Если гость, поля формы останутся пустыми
               $userId = false;
           }
   
           // Обработка формы
           if (isset($_POST['submit'])) {
               // Если форма отправлена
               // Получаем данные из формы
               $userName = $_POST['userName'];
               $userPhone = $_POST['userPhone'];
               $userComment = $_POST['userComment'];
   
               // Флаг ошибок
               $errors = false;
   
               // Валидация полей
               if (!User::checkName($userName)) {
                   $errors[] = 'Неправильное имя';
               }
               if (!User::checkPhone($userPhone)) {
                   $errors[] = 'Неправильный телефон';
               }
   
   
               if ($errors == false) {

                   $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                   $products = json_encode($productsInCart);
   
                   if ($result) {

                       $adminEmail = 'kjkkek13@gmail.com';
                       $message = $userComment;
                       $subject = 'Новый заказ!';
                       mail($adminEmail, $subject, $message.' || Products: '.$products.' || Number: '.$userPhone, 'From: php.send.mail54@gmail.com');
   
                       Cart::clear();
                   }
               }
           }
   
           // Подключаем вид
           require_once(ROOT . '/views/cart/checkout.php');
           return true;
       }



        // $productsInCart = Cart::getProducts();

        // $categories = array();
        // $categories = Category::getCategoriesList();

        // $result = false;

        // if(isset($_POST['submit'])) {

        //     $userName = $_POST['userName'];
        //     $userPhone = $_POST['userPhone'];
        //     $userComment = $_POST['userComment'];

        //     $errors = false;

        //     if(!User::checkName($userName))
        //         $errors[] = 'Неправильное имя';
        //     if(!User::checkPhone($userPhone))
        //     $errors[] = 'Неправильное имя';

        //     if($errors == false) {

        //         if(User::isGuest()){
        //             $userId = false;
        //         } else {
        //             $userId = User::checkLogged();
        //         }

        //         $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

        //         if($result){
                    
        //             $adminEmail = 'kjkkek13@gmail.com';
        //             $message = 'ooo magad';
        //             $subject = 'Новый заказюлька';
        //             mail($adminEmail, $subject, $message, 'From: php.send.mail54@gmail.com');

        //             Cart::clear();
        //         } else{
        //             $productsInCart = Cart::getProducts();
        //             $productsIds = array_keys($productsInCart);
        //             $products = Product::getProdustsByIds($productsIds);
        //             $totalPrice = Cart::getTotalPrice($products);
        //             $totalQuantity = Cart::countItems();
        //         }
        //     } else {

        //         $productsInCart = Cart::getProducts();
        //         if($productsInCart == false) {
        //             header("Location: /learning/php/practice/test2/");
        //         } else{
        //             $productsIds = array_keys($productsInCart);
        //             $products = Product::getProdustsByIds($productsIds);
        //             $totalPrice = Cart::getTotalPrice($products);
        //             $totalQuantity = Cart::countItems();

        //             $userName = false;
        //             $userPhone = false;
        //             $userComment = false;

        //             if(User::isGuest()){

        //             } else{
        //                 $userId = User::checkLogged();
        //                 $user = User::getUserById($userId);
        //                 $userName = $user['name'];
        //             }
        //         }


        //     }
           
        // }
        // require_once(ROOT . '/views/cart/checkout.php');
        // return true;
}

