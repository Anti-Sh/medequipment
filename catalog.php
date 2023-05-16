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
                <a href="../catalog.php?name=<?= $item['en_alias'] ?>" data-category-id="<?= $item['id'] ?>">
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
            if (isset($_GET["name"])) {
                if ($_GET["name"] != $cat["en_alias"]) continue;
            }
        
        ?>
        <section class="catalog container">
            <div class="catalog__slider__wrapper">
                <?
                $cat_id = $cat['id'];
                $query_get_count = "SELECT COUNT(*) FROM `catalog_items` WHERE `category_id`='$cat_id'";
                $count = mysqli_fetch_row(mysqli_query($connect, $query_get_count))[0];

                $query_get_items = "SELECT * FROM `catalog_items` WHERE `category_id`='$cat_id'";
                $items = mysqli_query($connect, $query_get_items);
                $counter = 0;
                ?>
                <div class="сatalog__slider__top">
                    <a href="catalog.php?name=<?= $cat['en_alias'] ?>" class="catalog__slider__category" data-category-id="<?= $item['id'] ?>"><?= $cat["name"] ?> (<?=$count?>)</a>
                </div>
                <div class="catalog__items__wrapper">
                    <?
                    while( $item = mysqli_fetch_assoc($items) ):
                        $counter += 1;
                        if(!isset($_GET["name"]) && $counter == 9) break; 
                    ?>
                    <div class="catalog__item">
                        <a href="" class="catalog__item__img__link">
                            <img src="<?= $item["img_src"] ?>" width="295" height="200" loading="lazy" alt="item" class="catalog__item__img">
                        </a> 
                        <div class="catalog__item__name"><?= $item["name"] ?></div> 
                        <div class="catalog__item__text">
                            <p><?= $item["short_desc"] ?></p>
                        </div>
                        <?
                        $text = "В корзину";
                        if(isset($_SESSION["cart"][$item["id"]])) {
                            $text = "В корзине";
                        }
                        ?>
                        <a href="" class="catalog__item__btn" data-item-id="<?= $item["id"] ?>"><?=$text?></a>
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