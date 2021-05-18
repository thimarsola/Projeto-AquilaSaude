<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * Page
 */
$pageCss = new MatthiasMullie\Minify\CSS();
$pageCss->add(dirname(__DIR__, 1) . "/assets/css/style-page.css");
$pageCss->minify(dirname(__DIR__, 1) . "/assets/css/style-page.min.css");

/**
 * Page - Contact
 */
$pageContactCss = new MatthiasMullie\Minify\CSS();
$pageContactCss->add(dirname(__DIR__, 1) . "/assets/css/style-contact.css");
$pageContactCss->minify(dirname(__DIR__, 1) . "/assets/css/style-contact.min.css");

/**
 * Page - Team
 */
$pageTeamCss = new MatthiasMullie\Minify\CSS();
$pageTeamCss->add(dirname(__DIR__, 1) . "/assets/css/style-team.css");
$pageTeamCss->minify(dirname(__DIR__, 1) . "/assets/css/style-team.min.css");


/**
 * js
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/dropdown.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/owl.carousel.min.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/carousel.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/gallery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
 $homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/animation.js");
 $homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
$homeJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");

/**
 * Page
 */
$pageJs = new MatthiasMullie\Minify\JS();
$pageJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$pageJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$pageJs->add(dirname(__DIR__, 1) . "/assets/js/theme/dropdown.js");
$pageJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$pageJs->minify(dirname(__DIR__, 1) . "/assets/js/script-page.min.js");

/**
 * Page - Contact
 */
$pageContactJs = new MatthiasMullie\Minify\JS();
$pageContactJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$pageContactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$pageContactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/dropdown.js");
$pageContactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$pageContactJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$pageContactJs->add(dirname(__DIR__, 1) . "/assets/js/theme/contact/request.js");
$pageContactJs->minify(dirname(__DIR__, 1) . "/assets/js/script-contact.min.js");

/**
 * Page - Team
 */
$pageTeamJs = new MatthiasMullie\Minify\JS();
$pageTeamJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$pageTeamJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$pageTeamJs->add(dirname(__DIR__, 1) . "/assets/js/theme/dropdown.js");
$pageTeamJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$pageTeamJs->minify(dirname(__DIR__, 1) . "/assets/js/script-team.min.js");