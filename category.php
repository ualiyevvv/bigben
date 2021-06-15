<?php
/*
Template Name: Шаблон для single
*/
get_header();
$title = single_cat_title( '', false );

?>

<section class="promotions news" id="promotions">
        <div class="container">
            <h2><?=$title?></h2>
            <div class="promotions__wrap">
            
            <?php 
                if ( have_posts() ):
            ?>
            <?php
                while ( have_posts() ):
                    the_post();
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
                                asd
                            </div>
                        </div>
                        <div class="item__button">
                            <a href="<? the_permalink(); ?>"><button class="btn-oth">Посмотреть</button></a>
                        </div>
                    </div>  
                </div>

            <?php endwhile; ?>

            <?php else: ?>
                <p>Нет записей</p>
            <?php endif;?>

            </div>
        </div>
    </section>
    
<?
get_footer();
?>