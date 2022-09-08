        <?php wp_footer(); ?>
        <!-- <script type="text/javascript">
            window.mdc.autoInit();
        </script> -->
        <footer>
            <div class="footer__inner layout--1080">
                <div class="footer__col footer__links">
                    <?php get_template_part( 'snippets/omaw-logo' ); ?>
                    <a href="#" class="button button--accent button--accent-dark">Contact Us</a>
                    <a href="/become-a-member/" class="button button--secondary">Become a Member</a>
                    <!-- <div class="footer__membership">
                        <?php //wp_nav_menu(['theme_location' => 'footer']); ?>
                    </div> -->
                </div>
                <div class="footer__col footer__nav">
                    <?php wp_nav_menu(['Main Menu','walker' => new submenu_wrap()]); ?>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="footer__copyright-inner layout--1080">
                    <?php
                        $pp = '<a href="/privacy-policy" target="_blank">Privacy Policy</a>';
                        $cr = '<span>&copy; ' . date('Y') . ' ' . get_bloginfo() . '. All Rights Reserved. | ' . $pp . '</span>';

                        echo $cr;
                    ?>
                </div>
            </div>
        </footer>
    </body>
</html>