<?php
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения

$cname = $_POST['cname']; // Взятие значения из POST
$representer = $_POST['representer'];  // Взятие значения из POST
$phone = $_POST['phone'];  // Взятие значения из POST

$error_fields = [];  // Незаполненные поля

if ($cname === '') {
    $error_fields[] = 'feedback_cname';
}
if ($representer === '') {
    $error_fields[] = 'feedback_representer';
}
if ($phone === '') {
    $error_fields[] = 'feedback_phone';
}

if (!empty($error_fields)) {
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Все поля должны быть заполнены!",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}

$check = mysqli_query($connect, "SELECT * FROM `feedback` WHERE `phone` = '$phone' OR `organization_name` = '$cname'");

if (mysqli_num_rows($check) === 0) { // Проверка на соответствие введенных данных
    $query = "INSERT INTO `feedback`(`id`, `organization_name`, `represent_name`, `phone`) VALUES (NULL,'$cname','$representer','$phone')";
    mysqli_query($connect, $query);

    $response = [ // Создание JSON
        "status" => true
    ];
    echo json_encode($response); // Отправка JSON на страницу
    

} 
else {
    $response = [
        "status" => false,
        "message" => 'Заявка на данный номер или компанию уже создана!'
    ];

    echo json_encode($response);
}