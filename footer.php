    </div>
    <footer>
        <div class="container">
            <div class="footer__nav">
                <div class="logo">
                    <a href="/">BigBen</a>
                </div>
                <? 
                    wp_nav_menu([
                        "theme_location" => "hhhmenu",
                        "contianer" => "nav",
                        "contianer_class" => "header__nav-wrap",
                        "menu_class" => "menu",
                        "items_wrap" => '<ul class="%2$s">%3$s</ul>',
                        'depth'           => 1,
                    ]);
                ?>
                <div class="phone">
                    <a href="tel:88001001010">8 (800) 100-10-10</a>
                </div>     
            </div>
        </div>
    </footer>
</main>

<?php wp_footer(); ?>
</body>
</html>