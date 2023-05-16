<?php
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if (count($_SESSION["cart"]) == 0) {
    $response = [ // Создание JSON
        "status" => false,
        "isAdded" => false,
        "message" => "Ваша корзина пуста!"
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die();
}
$userId = $_SESSION["user"]["id"];
$datetime = date_create()->format('Y-m-d H:i:s');
$query = "INSERT INTO `orders`(`id`, `user_id`, `date`, `status`) VALUES (NULL,'$userId','$datetime','0');";
$response = mysqli_query($connect, $query);
$order_id = mysqli_insert_id($connect);

foreach($_SESSION["cart"] as $item => $arr) {
    $count = $arr["count"];
    $query_items = "INSERT INTO `order_items`(`id`, `order_id`, `catalog_item_id`, `count`) VALUES (NULL,'$order_id','$item','$count');";
    $response = mysqli_query($connect, $query_items);
}

$_SESSION["cart"] = [];

$response = [ // Создание JSON
    "status" => true,
    "message" => "Заказ оформлен, ожидайте, с вами свяжется наш сотрудник!"
];
echo json_encode($response); // Отправка JSON на страницу

die();