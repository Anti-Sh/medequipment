<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="node_modules/jquery.maskedinput/src/jquery.maskedinput.js" type="text/javascript"></script>
    <link rel="stylesheet" href="src/css/style.css">
    <title>Магазин медицинского оборудования</title>
</head>
<body>
    <?php 
        include "components/header.php";
    ?>
    <main>
        <section class="container banner">
            <div class="banner__left">
                <div class="banner__item1">
                    <div class="banner__item1Title">Современные тренажёры для реабилитации</div>
                    <div class="banner__item1Text">Широкий ассортимент отечественного оборудования.</div>
                    <svg class="banner__item1SVG" width="131" height="115" viewBox="0 0 131 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M61.7592 115L51.4905 105.269C41.0261 95.9316 32.4444 87.8964 25.7452 81.1635C19.0461 74.4306 13.7895 68.4103 9.97536 63.1026C6.16125 57.7949 3.54517 53.0032 2.1271 48.7276C0.709033 44.4519 0 39.906 0 35.0897C0 25.359 3.27622 17.078 9.82867 10.2468C16.3811 3.4156 24.4005 0 33.8869 0C39.3636 0 44.4735 1.15491 49.2167 3.46474C53.9599 5.77457 58.1407 9.28846 61.7592 14.0064C65.8667 9.19017 70.1943 5.65171 74.7419 3.39103C79.2895 1.13034 84.2527 0 89.6316 0C97.9444 0 105.157 2.875 111.269 8.625C117.382 14.375 121.171 21.4765 122.638 29.9295H108.849C108.066 25.6047 106.037 21.7959 102.761 18.5032C99.4847 15.2105 95.1083 13.5641 89.6316 13.5641C85.1329 13.5641 80.732 15.063 76.4289 18.0609C72.1258 21.0588 69.143 25.2115 67.4804 30.5192H56.3315C54.4733 25.3098 51.3927 21.1816 47.0896 18.1346C42.7865 15.0876 38.3856 13.5641 33.8869 13.5641C27.9212 13.5641 23.0314 15.6036 19.2172 19.6827C15.4031 23.7618 13.4961 28.8483 13.4961 34.9423C13.4961 38.9722 14.2296 42.781 15.6965 46.3686C17.1635 49.9562 19.7062 54.0598 23.3247 58.6795C26.9433 63.2991 31.882 68.6805 38.1411 74.8237C44.4002 80.9669 52.2729 88.4615 61.7592 97.3077C64.2042 94.8504 66.3068 92.9092 68.0672 91.484C69.8276 90.0588 71.8813 88.2158 74.2284 85.9551L75.7688 87.5769L78.9227 90.8942C79.9985 92.0246 81.0498 93.0566 82.0767 93.9904L83.617 95.391C81.1721 97.5534 79.045 99.4455 77.2357 101.067C75.4265 102.689 73.0549 104.876 70.1209 107.628L61.7592 115ZM98.5801 89.3461V70.1795H79.5095V56.7628H98.5801V37.5962H111.929V56.7628H131V70.1795H111.929V89.3461H98.5801Z" fill="white"></path>
                    </svg>
                    <a href="catalog.php?name=reabilitation" class="banner__item1Btn">Подробнее</a>
                </div>
                <div class="banner__item2">
                    <div class="banner__item2Title">Дезинфекция<br> и стерилизация</div>
                    <div class="banner__item2Text">Качественный состав и высокая эффективность действия.</div>
                    <a href="catalog.php?name=disinfection" class="banner__item2Link"></a>
                </div> 
                <div class="banner__item2">
                    <div class="banner__item2Title">Передовое оборудование для реанимации</div>
                    <div class="banner__item2Text">Только самые современные технологии.</div>
                    <a href="catalog.php?name=equipment" class="banner__item2Link"></a>
                </div> 
            </div>
            <div class="banner__right">
                <div class="banner__rightSubtitle">ГРАНД - МЕДИКА</div>
                <div class="banner__rightTitle">Поставщик медицинского<br> оборудования в Новосибирске</div>
                <div class="banner__rightText">Качественное консультирование, быстрая доставка и установка оборудования.</div>
                <a href="catalog.php" class="banner__rightBtn">Подробнее</a>
                <img src="src/images/banner.png" alt="banner" width="674" height="407" class="banner__rightImg">
            </div>
        </section>
        <section class="container preim">
            <ul>
                <li>
                    <img height="72" width="82" src="src/images/heart.svg" alt="heart" class="preim__img">
                    <h3 class="preim__text">
                        Единственный в Новосибирске поставщик медицинского оборудования
                    </h3>
                </li>
                <li>
                    <img height="72" width="82" src="src/images/heart.svg" alt="heart" class="preim__img">
                    <h3 class="preim__text">
                        Работаем непосредственно с производителями
                    </h3>
                </li>
                <li>
                    <img height="72" width="82" src="src/images/heart.svg" alt="heart" class="preim__img">
                    <h3 class="preim__text">
                        Консультируем по вопросам выбора товаров и грамотной эксплуатации
                    </h3>
                </li>
                <li>
                    <img height="72" width="82" src="src/images/heart.svg" alt="heart" class="preim__img">
                    <h3 class="preim__text">
                        Поставляем самое современное медицинское оборудование
                    </h3>
                </li>
            </ul>
        </section>
        <section class="catalog container">
            <div class="catalog__title__wrapper">
                <h2>
                    Мы предлагаеми только самое лучшее
                </h2>
                <a href="catalog.php">Перейти в каталог</a>
            </div>
            <?php
            $query1 = "SELECT * FROM `categories`";
            $response = mysqli_query($connect, $query1);
            while( $cat = mysqli_fetch_assoc($response) ):
                if (isset($_GET["name"])) {
                    if ($_GET["name"] != $cat["en_alias"]) continue;
                }
            
            ?>
            <div class="catalog__slider__wrapper mb2em">
                <?
                $cat_id = $cat['id'];
                $query_get_count = "SELECT COUNT(*) FROM `catalog_items` WHERE `category_id`='$cat_id'";
                $count = mysqli_fetch_row(mysqli_query($connect, $query_get_count))[0];

                $query_get_items = "SELECT * FROM `catalog_items` WHERE `category_id`='$cat_id' LIMIT 4";
                $items = mysqli_query($connect, $query_get_items);
                ?>
                <div class="сatalog__slider__top">
                    <a href="catalog.php?name=<?= $cat['en_alias'] ?>" class="catalog__slider__category" data-category-id="<?= $item['id'] ?>"><?= $cat["name"] ?> (<?=$count?>)</a>
                </div>
                <div class="catalog__slider">
                    <ul class="slider__wrapper">
                        <?
                        while( $item = mysqli_fetch_assoc($items) ):
                        ?>
                        <li class="catalog__slide">
                            <div class="catalog__item">
                                <a href="#" class="catalog__item__img__link">
                                    <img src="<?= $item["img_src"] ?>" width="295" height="200" loading="lazy" alt="item" class="catalog__item__img">
                                </a> 
                                <div class="catalog__item__name"><?= $item["name"] ?></div> 
                                <div class="catalog__item__text">
                                    <p><?= $item["short_desc"] ?></p>
                                </div>
                                <a href="#" class="catalog__item__btn" data-item-id="<?= $item["id"] ?>">В корзину</a>
                            </div>
                        </li>
                        <?php
                        endwhile;
                        ?>
                    </ul>
                </div>
            </div>
            <?
            endwhile;
            ?>

        </section>
        <section class="about container">
            <img src="src/images/pulse.svg" width="177" height="156" alt="pulse" class="about__pulse">
            <h2 class="about__title">О КОМПАНИИ</h2>
            <img class="about__logo" src="src/images/logo.svg" width="263" height="39" alt="logo"> 
            <div class="about__subtitle">Поставщик медицинского оборудования в Новосибирске</div>
            <div class="about__text">
                <p><span>Дата основания компании: 22.03.2017.&nbsp;</span></p>
                <p><span>Мы работали во время пандемии, поставляли в больницы аппараты искусственной вентиляции легких, паровые стерилизаторы и другое медицинское оборудование. Мы продолжаем успешно поставлять медтехнику в условиях санкций. Мы не знаем, какие вызовы готовит нам будущее, но постараемся принять их с честью.</span></p>
            </div>
            <a href="about.php" class="about__link">Подробнее</a>
            <img src="src/images/about.svg" alt="about" width="2094" height="956" loading="lazy" class="about__fon">
            <div class="about__quote">
                <svg class="about__quoteImg" width="82" height="72" viewBox="0 0 82 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M38.6585 72L32.2307 65.9077C25.6805 60.0615 20.3087 55.0308 16.1153 50.8154C11.922 46.6 8.63158 42.8308 6.24412 39.5077C3.85666 36.1846 2.21911 33.1846 1.33147 30.5077C0.443822 27.8308 0 24.9846 0 21.9692C0 15.8769 2.05077 10.6923 6.1523 6.41539C10.2538 2.13846 15.2736 0 21.2116 0C24.6398 0 27.8384 0.723077 30.8074 2.16923C33.7764 3.61539 36.3934 5.81538 38.6585 8.76923C41.2296 5.75385 43.9384 3.53846 46.785 2.12308C49.6316 0.707693 52.7383 0 56.1053 0C61.3087 0 65.8234 1.8 69.6495 5.4C73.4756 9 75.8477 13.4462 76.766 18.7385H68.1344C67.6446 16.0308 66.3744 13.6462 64.3236 11.5846C62.2729 9.52308 59.5334 8.49231 56.1053 8.49231C53.2893 8.49231 50.5345 9.43077 47.841 11.3077C45.1474 13.1846 43.2803 15.7846 42.2396 19.1077H35.2609C34.0978 15.8462 32.1695 13.2615 29.4759 11.3538C26.7824 9.44615 24.0276 8.49231 21.2116 8.49231C17.4774 8.49231 14.4166 9.76923 12.0291 12.3231C9.64166 14.8769 8.44793 18.0615 8.44793 21.8769C8.44793 24.4 8.90705 26.7846 9.82531 29.0308C10.7436 31.2769 12.3352 33.8462 14.6002 36.7385C16.8652 39.6308 19.9567 43 23.8746 46.8462C27.7925 50.6923 32.7204 55.3846 38.6585 60.9231C40.1889 59.3846 41.505 58.1692 42.6069 57.2769C43.7089 56.3846 44.9944 55.2308 46.4636 53.8154L47.4278 54.8308L49.402 56.9077C50.0754 57.6154 50.7335 58.2615 51.3763 58.8462L52.3404 59.7231C50.81 61.0769 49.4785 62.2615 48.346 63.2769C47.2135 64.2923 45.729 65.6615 43.8925 67.3846L38.6585 72ZM61.7066 55.9385V43.9385H49.7693V35.5385H61.7066V23.5385H70.0627V35.5385H82V43.9385H70.0627V55.9385H61.7066Z" fill="#007BFB"></path>
                </svg>
                <div class="about__quoteText">Консультируем по выбору и грамотной эксплуатации медицинского оборудования!</div>
                <div class="about__quoteName">Алексей Алексеев</div>
            </div>
            <img src="src/images/doctor.svg" alt="doctor" loading="lazy" width="635" height="768" class="about__doctor">
        </section>
        <section class="questions">
			<div class="container">
				<div class="questions__wrapper">
                    <div class="questions__title_wrapper">
                        <h2 class="questions__title">Обратная связь*</h2>
                        <p>* По предложениям сотрудничества от юридических лиц</p>
                    </div>
                    <div class="questions__form__wrapper">
                        <form class="feedback__form authreg__form" action="" method="post" id="feedback-form">
                            <label for="feedback_cname">Наименование компании</label>
                            <input type="text" name="feedback_cname" id="feedback_cname" placeholder="ОАО &laquo;ЛОГИСТ-ГРУПП&raquo;">
                            <label for="feedback_representer">ФИО представителя</label>
                            <input type="text" name="feedback_representer" id="feedback_representer" placeholder="Иванов Иван Иванович">
                            <label for="feedback_phone">Контактный номер телефона</label>
                            <input type="text" name="feedback_phone" id="feedback_phone" placeholder="+7(800)500-90-90">
                            <input type="submit">
                        </form>
                    </div>
				</div>
			</div>
			<img src="src/images/questions.svg" alt="fon" loading="lazy" width="2046" height="300" class="questions__fon">
		</section>
    </main>

    <?php 
        include "components/footer.php";
    ?>
</body>
</html>