<?php

namespace App\Libraries;

use App\Libraries\Config;

class Csrf
{
    protected $config;
    protected $tokenName;

    public function __construct()
    {
        $this->config = new Config;
        $this->tokenName = $this->config->get('Csrf.name');
        $this->generateToken();
    }

    protected function generateToken()
    {
        if (!isset($_SESSION[$this->tokenName])) {
            $_SESSION[$this->tokenName] = bin2hex(random_bytes(32));
        }
    }

    public function getToken()
    {
        return $_SESSION[$this->tokenName];
    }

    public function validateToken($token)
    {
        return hash_equals($_SESSION[$this->tokenName], $token);
    }
}
