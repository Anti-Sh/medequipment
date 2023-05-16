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
        <section class="container userContentSize">
            <h1 class="title">О компании</h1>
            <div class="">
                <div class="userContent"> 
                    <p><span style="font-weight: 400;">Наша компания называется «Гранд-Медика». Наша специализация ‒ продажа медицинского оборудования оптом. У нас можно приобрести:</span></p>
                    <ul>
                    <li><span style="font-weight: 400;"> Оборудование для реанимации:</span></li>
                    <li><span style="font-weight: 400;"> Тренажеры для реабилитации;</span></li>
                    <li><span style="font-weight: 400;"> Оборудование и материалы для стерилизации.</span></li>
                    </ul>
                    <p><span style="font-weight: 400;">Полный список товаров смотрите </span><a href="catalog.php"><span style="font-weight: 400;">в каталоге</span></a><span style="font-weight: 400;">. Если вам нужны медицинские изделия, которых там нет, свяжитесь с нами. Мы оценим ситуацию и постараемся помочь.</span></p>
                    <p><span style="font-weight: 400;">Надеемся, что наше знакомство перерастет в долгое взаимовыгодное сотрудничество.</span></p>
                    <h2><span style="font-weight: 400;">Чем мы можем быть вам полезны</span></h2>
                    <p><span style="font-weight: 400;">В список наших услуг входит:</span></p>
                    <ul>
                    <li><span style="font-weight: 400;">КОНСУЛЬТИРОВАНИЕ. Мы предоставим вам исчерпывающую информацию о назначении и характеристиках нашей техники, правилах ее эксплуатации. Следование этим правилам ‒ залог того, что медтехника прослужит долго.</span></li>
                    <li><span style="font-weight: 400;"> ДОСТАВКА со складов до места размещения.</span></li>
                    <li><span style="font-weight: 400;"> УСТАНОВКА с учетом специфики оборудования и помещения.</span></li>
                    </ul>
                    <p><span style="font-weight: 400;">Все сотрудники «Гранд-Медики» проходят обучение у производителей. В результате мы хорошо знаем особенности каждого товара.</span></p>
                    <h2><span style="font-weight: 400;">Об опыте</span></h2>
                    <p><span style="font-weight: 400;">Дата основания компании: 22.03.2017.&nbsp;</span></p>
                    <p><span style="font-weight: 400;">Мы работали во время пандемии, поставляли в больницы аппараты искусственной вентиляции легких, паровые стерилизаторы и другое медицинское оборудование. Мы продолжаем успешно поставлять медтехнику в условиях санкций. Мы не знаем, какие вызовы готовит нам будущее, но постараемся принять их с честью.</span></p>
                    <p><span style="font-weight: 400;">Хотите сделать заказ или обсудить возможное сотрудничество? Свяжитесь с нами по телефону <a href="tel:+73832210424">+7 (383) 221-04-24</a>&nbsp;или пишите на почту <a href="mailto:grandmedika@yandex.ru">grandmedika@yandex.ru</a>.</span></p>
                </div>
            </div>
        </section>
    </main>

    <?php 
        include "components/footer.php";
    ?>
</body>
</html>