<?php

/**
 * Método auxiliar para obtener la ruta de una imagen
 * 
 * @param string $path
 * @return string
 */
function img(string $path = '')
{
    return asset("/img/$path");
}

/**
 * Convierte datetime a formato DD/MM/YYYY HH:MM AM/PM
 *
 * @param string $datetime La fecha y hora a imprimir.
 * @return string La fecha y hora en formato DD/MM/YYYY HH:MM AM/PM.
 */
function printDateTime($datetime)
{
    $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $datetime);
    $formatted_datetime = $datetime->format('d/m/Y h:i A');
    
    return $formatted_datetime;
}