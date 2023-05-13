<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/jquery/dist/jquery.js"></script>
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
            <div class="form__outer" id="auth-wrapper">
                <h1 class="title">Авторизация</h1>
                <form class="authreg__form" action="" method="post" id="auth-form">
                    <label for="auth_email">E-mail</label>
                    <input type="email" name="auth_email" id="auth_email" placeholder="example@mail.ru">
                    <label for="auth_password">Пароль</label>
                    <input type="password" name="auth_password" id="auth_password" placeholder="**************">
                    <p class="change__screen">
                        У вас еще нет аккаунта? <span>Зарегистрироваться</ы>
                    </p>
                    <input type="submit">
                </form>
            </div>
            <div class="form__outer" id="reg-wrapper" style="display: none;">
                <h1 class="title">Регистрация</h1>
                <form class="authreg__form" action="" method="post" id="reg-form">
                    <label for="reg_email">E-mail</label>
                    <input type="email" name="reg_email" id="reg_email" placeholder="example@mail.ru">
                    <label for="reg_name">ФИО</label>
                    <input type="text" name="reg_name" id="reg_name" placeholder="Иванов Иван Иванович">
                    <label for="reg_password">Пароль</label>
                    <input type="password" name="reg_password" id="reg_password" placeholder="**************">
                    <label for="reg_password_confirm">Подтвердите пароль</label>
                    <input type="password" name="reg_password_confirm" id="reg_password_confirm" placeholder="**************">
                    <p class="change__screen">
                        У вас уже есть аккаунт? <span>Авторизироваться</ы>
                    </p>
                    <input type="submit">
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