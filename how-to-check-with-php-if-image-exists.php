<?php
/**
 * Check with URL if image exist
 *
 * @param null $url
 * @return bool
 */
function img_exist($url = NULL)
{
    if (!$url) return FALSE;

    $headers = get_headers($url);
    return stripos($headers[0], "200 OK") ? TRUE : FALSE;
}