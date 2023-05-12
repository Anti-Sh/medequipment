<? 
session_start(); 
//$connect = mysqli_connect('localhost', 'root', '', 'pool') or die('Не удалось подключиться к базе данных');
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
                        <li>
                            <a href="#">Тренажеры для реабилитации</a>
                        </li>
                        <li>
                            <a href="#">Дезинфекция и стерилизация</a>
                        </li>
                        <li>
                            <a href="#">Оборудование для реанимации</a>
                        </li>
                    </ul>
                </li>
                <li class="nav_item">
                    <a href="../about.php">О компании</a>
                </li>
                <li class="nav_item">
                    <a href="../authreg.php">Личный кабинет</a>
                </li>
            </ul>
        </nav>
        <div class="inner">
            <a href="tel:+73832210424" class="header__phone">+7(383)221-04-24</a>
        </div>
    </div>
</header>