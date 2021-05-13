<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");


/**
 * js
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/owl.carousel.min.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/carousel.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/gallery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/gsap.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/ScrollTrigger.js");
// $homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/animation.js");
// $homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/animation.js");
$homeJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");