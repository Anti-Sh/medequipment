<?php
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения

$itemId = $_POST['itemId']; // Взятие значения из POST
$isAdd = $_POST['isAdd'];

$isAdd = true ? $isAdd == "true" : false;

$error_fields = [];  // Незаполненные поля

if ($itemId === '') {
    $error_fields[] = 'itemId';
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

if (!isset($_SESSION["cart"][$itemId])) {
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Техническая ошибка! Попробуйте позже."
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die();
}
$isDeleted = false;
if ($isAdd && ($_SESSION["cart"][$itemId]["count"] != 9)) {
    $_SESSION["cart"][$itemId]["count"] += 1;
}
elseif (!$isAdd && ($_SESSION["cart"][$itemId]["count"] != 1)) {
    $_SESSION["cart"][$itemId]["count"] -= 1;
}
elseif (!$isAdd && ($_SESSION["cart"][$itemId]["count"] == 1)) {
    unset($_SESSION["cart"][$itemId]);
    $isDeleted = true;
}

$newCount = $_SESSION["cart"][$itemId]["count"];

$response = [ // Создание JSON
    "status" => true,
    "newCount" => $newCount,
    "message" => "Количество изменено!",
    "isDeleted" => $isDeleted
];
echo json_encode($response); // Отправка JSON на страницу

die();