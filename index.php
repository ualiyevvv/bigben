<?php
/*
Template Name: Шаблон для single
*/
get_header();
$news = get_posts([
    'category_name' => "news",
]);

?>

<section class="promotions news" id="promotions">
        <div class="container">
            <h2>Новости</h2>
            <div class="promotions__wrap">
            
            <?
                if($news):
                    foreach($news as $post):
                        setup_postdata($new);
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
        </div>
    </section>
    
<?
get_footer();
?>