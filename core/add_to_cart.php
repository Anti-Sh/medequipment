<?php
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения

$itemId = $_POST['itemId']; // Взятие значения из POST

$error_fields = [];  // Незаполненные поля

if ($itemId === '') {
    $error_fields[] = 'feedback_cname';
}

if (!empty($error_fields)) {
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Техническая ошибка! Попробуйте позже.",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

if (isset($_SESSION["cart"][$itemId])) {
    unset($_SESSION["cart"][$itemId]);
    $response = [ // Создание JSON
        "status" => true,
        "isAdded" => false,
        "message" => "Товар удалён из корзины!"
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die();
}

$query = "SELECT `name` FROM `catalog_items` WHERE `id`='$itemId';";
$response = mysqli_query($connect, $query);
$item_name = mysqli_fetch_row($response)[0];

$_SESSION["cart"][$itemId]["name"] = $item_name;
$_SESSION["cart"][$itemId]["count"] = 1;

$response = [ // Создание JSON
    "status" => true,
    "isAdded" => true,
    "itemName" => $item_name,
    "message" => "Товар добавлен в корзину!"
];
echo json_encode($response); // Отправка JSON на страницу

die();