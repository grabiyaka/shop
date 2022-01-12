<?php 

class AdminOrderController extends AdminBase
{

    public function actionIndex()
    {

        self::checkAdmin();

        $ordersList = Order::getOrdersList();

        require_once(ROOT . '/views/admin_order/index.php');
        return true;

    }

    public function actionView($id)
    {

        self::checkAdmin();

        $order = Order::getOrderById($id);

        $productsQuantity = json_decode($order['products'], true);

        $productsIds = array_keys($productsQuantity);

        $products = Product::getProdustsByIds($productsIds);

        require_once(ROOT . '/views/admin_order/view.php');

        return true;

    }



}