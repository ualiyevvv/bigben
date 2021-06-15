<?php
/*
Template Name: Шаблон для главной страницы
*/
get_header();
$news = get_posts([
    'category_name' => "news",
    'numberposts' => 3,
]);
$teachers = get_posts([
    'category_name' => "teachers",
    'numberposts' => -1,
]);


?>
    <section class="upper">
        <div class="container">
            <div class="promo">
                <div class="promo__info">
                    <h1>Мы школа английского языка</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="trust">
        <div class="container">
            <h2>Выбирайте нас</h2>
            <div class="trust__block">
                <div class="trust__text">
                    <b>«FlightPool»</b> - новая и энергичная авиакомпания, предоставляющая
                    услуги пассажирских авиаперевозок небольшими малогабаритными самолетами. Главная цель
                    компании - развить связность между городами России путем организации авиасообщений на
                    непостоянной основе по мере накопления запросов на перелет. 
                </div>
                <div class="trust__img trust__form">
                    <span>Записаться на пробное занятие</span>
                    <form action="">
                        <input type="text" class="input" placeholder="ФИО">
                        <input type="text" class="input" placeholder="Номер телефона">
                        <input type="email" class="input" placeholder="Электронная почта">
                        <input type="date" class="input" placeholder="Дата">
                        <input type="submit" class="btn" value="Записаться">
                    </form>
                </div>
            </div>
        </div>
    </section>


    <section class="promotions news" id="promotions">
        <div class="container">
            <h2>Новости</h2>
            <div class="promotions__wrap">
                <?
                if($news):
                    foreach($news as $post):
                        setup_postdata($post);
                ?>
                <div class="promotions__item">
                    <div class="item__img">
                        <?
                            if(!has_post_thumbnail() ){
                                echo '<img src="'.get_template_directory_uri().'/images/screenshot.png" alt="">';
                            }else {
                                the_post_thumbnail('full');
                            }
                        ?>
                    </div>
                    <div class="item__info">
                        <div class="item__info_one">
                            <div class="item__header"><? the_title(); ?></div>
                            <div class="item__descr">
                            </div>
                        </div>
                        <div class="item__button">
                            <a href="<? the_permalink(); ?>"><button class="btn-oth">Посмотреть</button></a>
                        </div>
                    </div>  
                </div>
                <?
                    endforeach;
                    wp_reset_postdata(); 
                else:
                    echo "<p>нет записей</p>";
                endif;
                ?>
            </div>            
            <div class="result__more mt-2">
                <a href="news.html"><div class="btn-oth">Посмотреть все новости</div></a>
            </div>
        </div>
    </section>


    <section class="promotions" id="promotions">
        <div class="container">
            <h2>Преподаватели</h2>
            <div class="promotions__wrap"><?
                if($teachers):
                    foreach($teachers as $post):
                        setup_postdata($post);
                ?>
                <div class="promotions__item">
                    <div class="item__img">
                        <?
                            if(!has_post_thumbnail() ){
                                echo '<img src="'.get_template_directory_uri().'/images/screenshot.png" alt="">';
                            }else {
                                the_post_thumbnail('full');
                            }
                        ?>
                    </div>
                    <div class="item__info">
                        <div class="item__info_one">
                            <div class="item__header"><? the_title(); ?></div>
                            <div class="item__descr">
                                <? the_content(); ?>
                            </div>
                        </div>
                        <div class="item__button">
                        </div>
                    </div>  
                </div>
                <?
                    endforeach;
                    wp_reset_postdata(); 
                else:
                    echo "<p>нет записей</p>";
                endif;
                ?>
            </div>
        </div>
    </section>
    
<?
get_footer();
?>