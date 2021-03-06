<!doctype html>
<html lang="<?= SITE["lang"]; ?>">

<head>
    <meta charset="utf-8">
    <link rel="alternate" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" hreflang="x-default" />
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --> <?php  if (!is_404()): ?>
    <title><?php echo(is_home()) ? SITE["name"] : the_title() . " - " . SITE["name"]; ?></title> <?php else: ?> <title>
        <?= SITE["name"]; ?></title> <?php endif; ?>
    <base href="<?= get_site_url(); ?>">
    <meta name="description" content="<?= SITE["desc"]; ?>">
    <meta name="keywords" content="<?= SITE["keywords"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="geo.region" content="<?= REGION["region"]; ?>" />
    <meta name="geo.placename" content="<?= REGION["placename"]; ?>" />
    <meta name="geo.position" content="<?= REGION["position"]; ?>" />
    <meta name="ICBM" content="<?= REGION["icbm"]; ?>" />
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
    <meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.png">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?= SITE["name"] ?>">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/images/aquila-saude.png">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:description" content="<?= SITE["desc"]; ?>">
    <meta property="og:site_name" content="<?= SITE["name"] ?>"> <?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>> <?php
    if (function_exists('custom_wp_body_open')) {
        wp_body_open();
    }
    ?> <h1 class="d-none"><?php echo(is_home()) ? 'Cl??nica ??quila Sa??de' : the_title()?></h1> <?php
        if(!is_404()):
    ?>
    <!--header-->
    <header class="header">
        <div class="header__container">
            <!--navbar-->
            <div class="header__navbar">
                <!-- brand -->
                <a href="<?= get_home_url(); ?>" title="<?= SITE["name"]; ?>">
                    <i class="aquila-logo-topo"></i>
                </a>
                <div class="header__navbar__section">
                    <!-- toggle -->
                    <div class="header__navbar__section__toggle<?= is_page() ? ' toggle__pages' : '' ?>">
                        <div class="header__navbar__section__toggle__bar"></div>
                        <div class="header__navbar__section__toggle__bar"></div>
                        <div class="header__navbar__section__toggle__bar"></div>
                    </div>
                    <!-- end of toggle -->
                    <!-- container -->
                    <div class="header__navbar__section__container">
                        <!-- nav -->
                        <nav class="header__navbar__section__container__nav<?= is_page() ? ' header--pages' : '' ?>">
                            <h2 class="d-none">Menu de Navega????o</h2>
                            <?php
                                if(is_home()){
	                                wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => ''));
                                }elseif (is_page()) {
	                                wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => ''));
                                }
                            ?>

                            <!-- google -->
                            <div class="header__navbar__section__container__nav__google">
                                <a rel="nofollow" href="https://g.page/r/CQLyEXBClGYaEAE/review" target="_blank" title="Avalie a Cl??nica ??quila Sa??de">
                                    <picture>
                                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/avaliacao-google.webp" type="image/webp">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/avaliacao-google.png" alt="Avalie a Cl??nica ??quila Sa??de" loading="lazy">
                                    </picture>
                                </a>
                            </div>
                            <!-- end of google -->
                        </nav>
                        <!-- end of nav -->
                    </div>
                    <!-- end of container -->
                </div>
            </div>
            <!--end of navbar-->
        </div>
    </header>
    <!--end of header-->
    <!-- whatsapp -->
    <div class="whatsapp">
        <div class="whatsapp__content">
            <a rel="nofollow" href="https://api.whatsapp.com/send?phone=55<?= formatPhone(CONTACT["whatsapp"]["number"]); ?>&text=<?= urlencode(CONTACT["whatsapp"]["message"]); ?>" target="_blank" title="Vamos conversar?">
                <i class="aquila-whatsapp"></i>
            </a>
        </div>
    </div>
    <!-- end of whatsapp -->
    <!-- main -->
    <main> <?php endif ?>