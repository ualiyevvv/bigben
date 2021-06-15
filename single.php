<?php
/*
Template Name: Шаблон для single
*/
get_header();

?>


<section class="singlepage">
        <div class="container">
            
            <?php 
                if ( have_posts() ):
            ?>
            <?php
                while ( have_posts() ):
                    the_post();
                    if(get_the_post_thumbnail_url()) {
                        $img = get_the_post_thumbnail_url();
                    }
                    else {
                        $img = get_template_directory_uri() . '/images/screenshot.png';
                    }
                    if(get_the_category()[0]->slug == 'news'){
                        $date_of_new = get_the_date();
                    }
            ?>
            <div class="single__img" style="background: url('<?=$img?>') center center/cover no-repeat;"> 
                <div class="single__header"><? the_title(); ?></div>
                <span><?=$date_of_new?></span>
            </div>
            <div class="single__info">
                <div class="single__descr">
                    <? the_content(); ?>
                </div>
            </div>             

            <?php endwhile; ?>

            <?php else: ?>
                <p>Нет записей</p>
            <?php endif;?> 
        </div>
    </section>
    
<?
get_footer();
?>