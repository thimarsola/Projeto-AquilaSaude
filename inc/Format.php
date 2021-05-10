<?php

/**
 * @param string $phone
 * @return string
 */
function formatPhone(string $phone): string{
    $data = str_replace([' ', '(', ')', '-'], '', $phone);

    return $data;
}

/**
 * Function for create whatsapp message
 *
 * @param string $phone
 * @param string $message
 * @return string
 */

function whatsapp(string $phone, string $message): string{
    $whatsapp = 'https://api.whatsapp.com/send?phone=55' . $phone . '&text=' . urlencode($message);

    return $whatsapp;
}