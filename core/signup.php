<?
require_once 'connect.php'; // "Импорт" содержимого файла со строкой подключения

$email = $_POST['email']; // Взятие значения из POST
$fio = $_POST['fio'];
$password = $_POST['password'];  // Взятие значения из POST
$password_confirm = $_POST['password_confirm'];  // Взятие значения из POST

$error_fields = [];  // Незаполненные поля

if ($email === '') $error_fields[] = 'reg_email'; // Проверка полей на пустоту
if ($fio === '') $error_fields[] = 'reg_name'; // Проверка полей на пустоту
if ($password === '') $error_fields[] = 'reg_password'; // Проверка полей на пустоту
if ($password_confirm === '') $error_fields[] = 'reg_password_confirm'; // Проверка полей на пустоту

if (!empty($error_fields)) { // Проверка на наличие пустых полей
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Все поля должны быть заполнены!",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}
if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){ // Проверка почты на валидность
    $error_fields[] = 'reg_email'; 
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Укажите существующую почту!",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}
$fio_arr = explode(" ", $fio);
if (count($fio_arr) != 3) { // Проверка почты на валидность
    $error_fields[] = 'reg_name';
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Проверьте корректность заполнения поля ФИО!",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}
if ($password !== $password_confirm){
    $error_fields[] = 'reg_password';
    $error_fields[] = 'reg_password_confirm';
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Пароли не совпадают!",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}
if (strlen($password) < 6){
    $error_fields[] = 'reg_password';
    $response = [ // Создание JSON
        "status" => false,
        "message" => "Длина пароля не может быть меньше 6 символов!",
        "fields" => $error_fields
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}

$check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");

if (mysqli_num_rows($check_email) > 0) $msg = "Пользователь с такой почтой уже зарегистрирован!";

if (!empty($msg)){
    $response = [ // Создание JSON
        "status" => false,
        "message" => $msg
    ];
    echo json_encode($response); // Отправка JSON на страницу
    die(); // Прекращение выполнения кода
}

$last_name = $fio_arr[0];
$first_name = $fio_arr[1];
$middle_name = $fio_arr[2];

$password_hash = hash("sha256", $password);

$insert_query = "INSERT INTO `users`(`id`, `email`, `first_name`, `middle_name`, `last_name`, `password`) VALUES (NULL,'$email', '$first_name', '$middle_name', '$last_name', '$password_hash')";
mysqli_query($connect, $insert_query);

$response = [ // Создание JSON
    "status" => true,
    "message" => "Аккаунт зарегистрирован. Авторизируйтесь"
];
echo json_encode($response); // Отправка JSON на страницу
die();

