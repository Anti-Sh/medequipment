<div class="cart__wrapper">
    <div class="cart">
        <img src="src/images/cart.png" alt="cart">
    </div>
    <div class="cart_list"  style="display: none;">
        <div class="cart__title__wrapper">
            <h3 class="title">Корзина</h3>
            <div class="close__wrapper">
                <img src="src/images/close.png" alt="close">
            </div>
        </div>
        <div class="cart__item">
            <h4>Тритатушечки атрита татаатритататаа тритатат аатрита татаатрита татаатрит атата</h4>
            <div class="count__panel">
                <button>-</button>
                <span>1</span>
                <button>+</button>

            </div>
        </div>
        <?
        if($isUser):
        ?>
        <button class="smb">Оформить</button>
        <?
        endif;
        ?>
    </div>
</div>  

<div class="notifications__wrapper">
        
</div>

<footer>
    <div class="container">
        <div class="footer__top">
            <div class="footer__left">
                <a href="/" class="footer__logo">
                    <img src="src/images/logo.svg" width="263" height="39" alt="logo" class="footer__logoImg">
                </a>
                <div class="footer__logoText">Поставщик медицинского оборудования</div>
            </div>
            
            <div class="footer__mid">
                <div class="footer__catalogNav">
                    <ul id="menu-podval-1" class="">
                        <li class="menu-item">
                            <a href="#"><b>Каталог</b></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="#">Дезинфекция и стерилизация</a></li>
                                <li class="menu-item"><a href="#">Оборудование для реанимации</a></li>
                                <li class="menu-item"><a href="#">Тренажеры для реабилитации</a></li>
                            </ul>
                        </li>
                    </ul>					
                </div>	
                <div class="footer__nav">
                    <ul id="menu-podval-2" class="">
                        <li class="menu-item"><a href="#">Главная</a></li>
                        <li class="menu-item"><a href="#">О компании</a></li>
                        <li class="menu-item"><a href="#">Личный кабинет</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer__right">
                <div class="footer__address">Адрес: 630091, г. Новосибирск,<br> ул. Некрасова, д.12, оф. 11</div>
                <a href="tel:+73832210424" class="footer__phone">+7 (383) 221-04-24</a>
                <a href="mailto: grandmedika@yandex.ru" class="footer__mail"> grandmedika@yandex.ru</a>
            </div>
        </div>
    </div>
</footer>

<script src="src/js/script.js"></script>