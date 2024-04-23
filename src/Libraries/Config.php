<?php

namespace App\Libraries;

class Config
{
    protected $configurations;

    public function __construct()
    {
        $this->configurations = [];
    }

    public function load($file)
    {
        $path = dirname(__DIR__) . '/Configs/' . $file . '.php';
        if (file_exists($path)) {
            $this->configurations[$file] = include $path;
        }
    }

    public function get($key, $default = null)
    {
        $keys = explode('.', $key);
        $file = $keys[0];
        $property = $keys[1] ?? null;

        if (!isset($this->configurations[$file])) {
            $this->load($file);
        }

        if ($property) {
            return $this->configurations[$file][$property] ?? $default;
        }

        return $this->configurations[$file] ?? $default;
    }
}
