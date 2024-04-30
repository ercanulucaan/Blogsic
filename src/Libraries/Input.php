<?php

namespace App\Libraries;

class Input
{

    public function get($key, $default = null)
    {
        return self::sanitize($_GET[$key] ?? $default);
    }

    public function post($key = null, $default = null)
    {
        if(!empty($key))
        {
            return self::sanitize($_POST[$key] ?? $default);
        }
        else
        {
            if(!empty($_POST))
            {
                $posts = [];
                foreach($_POST as $key => $value)
                {
                    $posts[$key] = self::sanitize($value ?? $default);
                }
                return $posts;
            }
        }
    }

    public function request($key, $default = null)
    {
        return self::sanitize($_REQUEST[$key] ?? $default);
    }

    public function file($key)
    {
        return $_FILES[$key] ?? null;
    }

    private static function sanitize($value)
    {
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        $value = addslashes($value);
        return $value;
    }
}
