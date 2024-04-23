<?php 

namespace App\Libraries;

use App\Libraries\Config;

class Session
{
    protected $config;
    protected $sessionId;
    
    public function __construct()
    {
        $this->config = new Config;

        if(!isset($_SESSION)) {
            session_name($this->config->get('Session.name'));
            session_cache_limiter($this->config->get('Session.cache_limiter'));
            session_cache_expire($this->config->get('Session.cache_expire'));
            ini_set('session.gc_maxlifetime', $this->config->get('Session.time'));
            session_set_cookie_params($this->config->get('Session.time'));
            session_start();
        }
        $this->id();
        $this->refresh();
    }

    public function status()
    {
        return session_status();
    }

    public function id()
    {
        $this->sessionId = session_id();
        return $this->sessionId;
    }

    public function regenerate_id()
    {
        session_regenerate_id();
        $this->id();

         return session_id();
    }

    public function all()
    {
        return $_SESSION;
    }

    public function set($key, $value = null) {
        if (!isset($key) || empty($key)) {
            throw new \Exception("Anahtar boş bırakılamaz.", 1);
        }

        if (is_array($key)) {
            foreach($key as $arrayIndex => $arrayValue) {
                $_SESSION[$arrayIndex] = $arrayValue;
            }
        } else {
            $_SESSION[$key] = $value;
        }

        return $this;
    }

    public function get($key)
    {
        if (!isset($_SESSION[$key])) {
            throw new \Exception("Anahtar '{$key}' bulunamadı.", 1);
        }

        return $_SESSION[$key];
    }

    public static function has($key) {
        $session = new self();
        return $session->search($key) != null ? true : false;
    }

    public function remove(...$key) 
    {
        if (is_array($key)) {
            foreach ($key as $sessionKey) {
                unset($_SESSION[$sessionKey]);
            }
        } else {
            unset($_SESSION[$key]);
        }
        
        return $this;
    }

    protected function refresh()
    {
        $_SESSION['_last_active'] = time();
    }

    protected function search($key) {
        return $this->all()[$key];
    }

    public function destroy()
    {
        session_unset();
        $this->refresh();
    }
}
