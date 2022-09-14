        <?php wp_footer(); ?>
        <footer>
            <div class="footer__inner layout--1080">
                <div class="footer__col">
                    <?php get_template_part( 'snippets/omaw-logo' ); ?>
                    <a href="#" class="button button--alt monitors">Contact Us</a>
                    <div class="footer__links devices">
                        <a href="/become-a-member/" class="button button--secondary">Become a Member</a>
                        <!-- <a href="#" class="button button--accent button--accent-dark">Contact Us</a> -->
                    </div>
                    <!-- <div class="footer__membership">
                        <?php //wp_nav_menu(['theme_location' => 'footer']); ?>
                    </div> -->
                </div>
                <div class="footer__col footer__nav">
                    <?php wp_nav_menu(['Main Menu','walker' => new submenu_wrap()]); ?>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__bottom-inner layout--1080">
                    <div class="footer__copyright">
                        <?php
                            $pp = '<a href="/privacy-policy" target="_blank">Privacy Policy</a>';
                            $cr = '<span>&copy; ' . date('Y') . ' ' . get_bloginfo() . '. All Rights Reserved. | ' . $pp . '</span>';

                            echo $cr;
                        ?>
                    </div>
                    <div class="footer__social">
                        <?php get_template_part( 'sections/section-social-links' ); ?>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>