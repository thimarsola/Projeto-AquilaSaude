<?php

/**
 * DEVELOPER
 */
define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Áquila Saúde",
    "desc" => "Oferecemos os principais serviços odontológicos, com uma infraestrutura de primeira linha, com equipamentos modernos, em um ambiente confortável",
    "domain" => "aquilasaude.com.br",
    "locale" => "pt_BR",
    "lang" => "pt-BR",
    "keywords" => "Dentista, Dentista São Caetano do Sul, Clínica Odontológica"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . '/Minifier.php';
}

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "112861974016840",
    "twitter_creator" => "@GoognetSolucao",
    "twitter_site" => "@GoognetSolucao"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "mail.goognet.com.br",
    "port" => "587",
    "user" => "sender@goognet.com.br",
    "passwd" => "Contato123*",
    "from_name" => "Áquila Saude",
    "from_email" => "thiago.marsola@goognet.com.br"
]);

/**
 * REGION
 */
define("REGION", [
    "region" => "BR-SP",
    "placename" => "S&atilde;o Caetano do Sul",
    "position" => "-23.619034;-46.565756",
    "icbm" => "-23.619034, -46.565756"
]);

/**
 * CONTACT
 */
define("CONTACT",[
    "whatsapp" => [
        "number" => "(11) 94285-4826",
        "message" => "Olá Áquila Saúde, gostaria de maiores informações"
    ],
    "phone" => [
        "01" => "(11) 4221-7333",
        "02" => "(11) 4221-7917"
    ],
    "mail" => "atendimento@aquilasaude.com.br",
    "address" => "Rua Piauí 140,  Santo Antônio - São Caetano do Sul - SP - CEP: 09541-150",
    "addressLink" => "https://goo.gl/maps/zddi9FcFYmQFxZ7p6",
    "google" => "https://g.page/r/CQLyEXBClGYaEAE/review"
]);