        <?php wp_footer(); ?>
        <!-- <script type="text/javascript">
            window.mdc.autoInit();
        </script> -->
        <footer>
            <div class="footer__inner layout--1080">
                <div class="footer__col">
                    <?php get_template_part( 'snippets/omaw-logo' ); ?>
                    <a href="#" class="button button--alt">Contact Us</a>
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