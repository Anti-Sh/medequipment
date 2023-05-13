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

        $query1 = "SELECT * FROM `categories`";
        $response = mysqli_query($connect, $query1);
    ?>
    <main>
        <section class="container">
            <h1 class="title">Каталог</h1>
            <div class="sections__top">
                <?php
                while( $item = mysqli_fetch_assoc($response)):
                ?>
                <a href="#" data-category-id="<?= $item['id'] ?>">
                    <img src="<?= $item['img_src'] ?>" alt="img">
                    <p>
                        <?= $item['name'] ?>
                    </p>
                </a>
                <?php
                endwhile;
                ?>
            </div>
        </section>
        
        <?php
        $response = mysqli_query($connect, $query1);
        while( $cat = mysqli_fetch_assoc($response) ):
        ?>
        <section class="catalog container">
            <div class="catalog__slider__wrapper">
                <?
                $cat_id = $cat['id'];
                $query_get_count = "SELECT COUNT(*) FROM `catalog_items` WHERE `category_id`='$cat_id'";
                $count = mysqli_fetch_row(mysqli_query($connect, $query_get_count))[0];

                $query_get_items = "SELECT * FROM `catalog_items` WHERE `category_id`='$cat_id'";
                $items = mysqli_query($connect, $query_get_items);
                ?>
                <div class="сatalog__slider__top">
                    <a href="#" class="catalog__slider__category" data-category-id="<?= $item['id'] ?>"><?= $cat["name"] ?> (<?=$count?>)</a>
                </div>
                <div class="catalog__items__wrapper">
                    <?
                    while( $item = mysqli_fetch_assoc($items) ):
                    ?>
                    <div class="catalog__item">
                        <a href="#" class="catalog__item__img__link">
                            <img src="<?= $item["img_src"] ?>" width="295" height="200" loading="lazy" alt="item" class="catalog__item__img">
                        </a> 
                        <div class="catalog__item__name"><?= $item["name"] ?></div> 
                        <div class="catalog__item__text">
                            <p><?= $item["short_desc"] ?></p>
                        </div>
                        <a href="#" class="catalog__item__btn" data-item-id="<?= $item["id"] ?>">Подробнее</a>
                    </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </section>   
        <?php
        endwhile;
        ?>
    </main>
    <?php 
        include "components/footer.php";
    ?>
</body>
</html>