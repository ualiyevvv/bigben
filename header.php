<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>BigBen</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<main>
    <div class="body">
    <header>
        <div class="container">
            <div class="logo">
                <a href="/">BigBen</a>
            </div>
                <!-- <ul class="menu">
                    <li class="menu__list"><a href="index.html#promotions">О нас</a></li>
                    <li class="menu__list"><a href="index.html">Наши школы</a></li>
                    <li class="menu__list"><a href="register.html">Новости</a></li>
                    <li class="menu__list"><a href="login.html">Наши услуги</a></li>
                </ul> -->
                <? 
                    wp_nav_menu([
                        "theme_location" => "hhhmenu",
                        "contianer" => "nav",
                        "contianer_class" => "header__nav-wrap",
                        "menu_class" => "menu",
                        "items_wrap" => '<ul class="%2$s">%3$s</ul>',
                    ]);
                    
                ?>
            <div class="phone">
                <a href="tel:88001001010">8 (800) 100-10-10</a>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
