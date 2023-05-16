<? 
session_start(); 
$connect = mysqli_connect('localhost', 'root', '', 'medequip') or die('Не удалось подключиться к базе данных');

$query1 = "SELECT * FROM `categories`";
$response = mysqli_query($connect, $query1);

$isUser = isset($_SESSION["user"]);
?>
<header>
    <div class="wrapper">
        <div class="logo">
            <a href="#" class="link">
                <img src="src/images/logo.svg" alt="logo" width="263" height="39">
            </a>
            <div>Поставщик медицинского оборудования</div>
        </div>
        <nav>
            <ul>
                <li class="nav_item">
                    <a href="../index.php">Главная</a>
                </li>
                <li class="nav_item" id="menu-catalog-link">
                    <a href="../catalog.php">Каталог</a>
                    <ul>
                        <?
                        while( $item = mysqli_fetch_assoc($response)):
                        ?>
                        <li>
                            <a href="catalog.php?name=<?=$item["en_alias"]?>"> <?= $item["name"] ?> </a>
                        </li>
                        <?
                        endwhile;
                        ?>
                    </ul>
                </li>
                <li class="nav_item">
                    <a href="../about.php">О компании</a>
                </li>
                <li class="nav_item">
                    <?
                    if (!$isUser):
                    ?>
                    <a href="../authreg.php">Авторизация</a>
                    <?
                    else:
                    ?>
                    <a href="../profile.php">Личный кабинет</a>
                    <?
                    endif;
                    ?>
                </li>
            </ul>
        </nav>
        <div class="inner">
            <a href="tel:+73832210424" class="header__phone">+7(383)221-04-24</a>
        </div>
    </div>
</header>