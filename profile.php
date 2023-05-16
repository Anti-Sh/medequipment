<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/jquery.maskedinput/src/jquery.maskedinput.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" sizes="32x32" href="src/images/favicon.png">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Магазин медицинского оборудования</title>
</head>
<body>
    <?php 
        include "components/header.php";
    ?>
    <main>
        <section class="authregsect about container">
            <img src="src/images/pulse.svg" width="177" height="156" alt="pulse" class="about__pulse">
            <div class="form__outer" id="profile-wrapper">
                <h1 class="title">Профиль</h1>
                <?
                if(!isset($_SESSION["user"])){
                    header('Location: authreg.php');
                }
                $query = "SELECT * FROM `users` WHERE `id`=" . $_SESSION["user"]["id"];
                $response = mysqli_query($connect, $query);
                $user = mysqli_fetch_assoc($response);
                $fio = $user["last_name"] . " " . $user["first_name"] . " " . $user["middle_name"];
                $count_query = "SELECT COUNT(*) FROM `orders` WHERE `user_id`=" . $_SESSION["user"]["id"];
                $response = mysqli_query($connect, $count_query);
                $count = mysqli_fetch_row($response)[0];
                ?>
                <form class="authreg__form" action="core/logout.php" method="post" id="profile-form">
                    <label for="auth_email">E-mail</label>
                    <input type="email" name="email" id="email" value="<?=$user["email"]?>" disabled>
                    <label for="auth_email">ФИО</label>
                    <input type="text" name="fio" id="fio" value="<?= $fio ?>" disabled>
                    <label for="auth_email">Количество заказов</label>
                    <input type="text" name="orders_count" id="orders_count" value="<?=$count?>" disabled>
                    <input type="submit" value="Выйти">
                </form>
            </div>
            <img src="src/images/about.svg" alt="about" width="2094" height="956" loading="lazy" class="about__fon">
            <img src="src/images/authreg.png" alt="doctor" loading="lazy" width="635" height="768" class="about__doctor">
        </section>
    </main>
    <?php 
        include "components/footer.php";
    ?>
</body>
</html>