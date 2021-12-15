<?php

define('CONST_DB_SERVER_ADDRESS', 'localhost');
define('CONST_DB_DATABASE_NAME', 'library');
define('CONST_DB_USER_NAME', 'root');
define('CONST_DB_USER_PASSWORD', '');

define('SITE_ROOT','/final/');

if (defined('CLI') == false)
{
    if (!preg_match('/^http:/', SITE_ROOT) OR ! preg_match('/^https:/', SITE_ROOT))
    {
        if (empty($_SERVER['HTTPS']))
        {
            define('FULL_SITE_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . SITE_ROOT);
        }
        else
        {
            define('FULL_SITE_ROOT', 'https://' . $_SERVER['HTTP_HOST'] . SITE_ROOT);
        }
    }
    else
    {
        define('FULL_SITE_ROOT', SITE_ROOT);
    }
}
