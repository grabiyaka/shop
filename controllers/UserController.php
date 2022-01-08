<?php

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';

        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)){
                $errors[] = 'У тебя тупое имя';
            }
            if(!User::checkEmail($email)){
                $errors[] = 'У тебя тупая почта';
            }
            if(!User::checkPassword($password)){
                $errors[] = 'У тебя тупой пароль';
            }
            if(User::checkEmailExist($email)){
                $errors[] = 'Такой email уже кто-то занял(';
            }

            if($errors == false){
                $result = User::register($name, $email, $password);
            }

        };

        require_once ROOT.'/views/user/register.php';

        return true;
    }
    public function actionLogin()
    {
        $email = '';
        $password = '';

        if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkEmail($email)){
                $errors[] = 'У тебя тупая почта';
            }
            if(!User::checkPassword($password)){
                $errors[] = 'У тебя тупой пароль';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Вы ввели неверные данные';
            } else {
                User::auth($userId);

                header("Location: http://localhost/learning/php/practice/test2/cabinet/");
            }

        };

        require_once ROOT.'/views/user/login.php';

        return true;
    }

    public function actionLogout()
    {
        session_start();
        unset($_SESSION['user']);
        header("Location: http://localhost/learning/php/practice/test2/");
    }
}