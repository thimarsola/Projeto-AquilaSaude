</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
    <!-- information -->
    <div class="footer__information bg-dark-900">
        <div class="container">

            <i class="aquila-logo-rodape"></i>

            <!-- nav -->
            <nav class="footer__information__menu">
                <h2 class="d-none">Menu de Navegação</h2>
                <?php
                            wp_nav_menu(array('theme_location' => 'header-footer', 'container_class' => '')); 
                        ?>
            </nav>
            <!-- end of nav -->

            <!-- social media -->
            <div class="footer__information__social">
                <nav>
                    <ul>
                        <li>
                            <a rel="nofollow" href="https://facebook.com/aquilasaude" target="_blank"
                                title="Siga-nos no Facebook">
                                <i class="aquila-facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a rel="nofollow" href="https://instagram.com/aquilasaude" target="_blank"
                                title="Siga-nos no Instagram">
                                <i class="aquila-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- end of social media -->

            <!-- copyright -->
            <div class="footer__information__copyright">
                <p><small><?= date('Y'); ?> - <?= SITE['name']; ?> - Todos os direitos reservados</small></p>
            </div>
            <!-- end of copyright -->
        </div>
    </div>
    <!-- end of information -->


    <!-- developer -->
    <div class="footer__developer bg-blue-500">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row">
                <!-- goognet -->
                <div class="footer__developer__row__goognet">
                    <p>Desenvolvido por
                        <b>
                            <a rel="nofollow" href="<?= DEV["url"]; ?>" target="_blank"
                                title="Agência Especializada em Marketing Digital"><?= DEV["name"]; ?></a>
                        </b>
                    </p>
                </div>
                <!-- end of goognet -->

                <!-- validator -->
                <div class="footer__developer__row__validator">
                    <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        } else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                    ?>

                    <a rel="nofollow"
                        href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F"
                        target="_blank" title="Tecnologia W3C">
                        <i class="aquila-w3c"></i>
                        W3C Validator
                    </a>
                </div>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>
<!-- end of footer -->

<?php wp_footer(); ?>

</body>

</html>