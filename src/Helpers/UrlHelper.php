<?php

function url($route = '', $params = [])
{
    $url = BASE_URL . $route;
    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    return strtolower($url);
}

function current_url()
{
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    return $protocol . '://' . $host . $uri;
}

function redirect_url($url, $statusCode = 302)
{
    header('Location: ' . $url, true, $statusCode);
    exit();
}