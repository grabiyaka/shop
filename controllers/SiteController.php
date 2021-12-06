<?php 


class SiteController
{

    public function actionIndex()
    {   

        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = [];
        $latestProducts = Product::getLatesProducts(6);

        require_once(ROOT. '/views/site/index.php');

        return true;

    }
    public function actionContact()
    {

        $mail = 'kjkkek13@gmail.com';
        $subject = 'Тема письма';
        $message = 'Сoдержание письма';
        $result = mail($mail, $subject, $message);

        var_dump($result);

        die;

    }

}