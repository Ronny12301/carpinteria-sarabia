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
