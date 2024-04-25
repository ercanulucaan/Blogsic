<?php

namespace App\Libraries;

class View
{
    protected $layout;
    protected $viewPath;
    protected $data = [];

    public function __construct($baseController)
    {
        foreach (get_object_vars($baseController) as $name => $value) {
            $this->{$name} = $value;
        }
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    public function loadSection($file)
    {
        $layoutType = ($this->layout === 'admin') ? 'admin/' : 'default/';

        $sectionFile = dirname(__DIR__) . '/Views/' . $layoutType . 'sections/' . $file . '.php';
        extract($this->data);
        include $sectionFile;
    }

    public function render($viewPath, $data = [])
    {
        $this->viewPath = $viewPath;
        $this->data = $data;

        $layoutType = ($this->layout === 'admin') ? 'admin/' : 'default/';

        $layoutFile = dirname(__DIR__) . '/Views/' . $layoutType . 'layouts/master.php';
        $viewFile = dirname(__DIR__) . '/Views/' . $layoutType . $this->viewPath . '.php';

        if (!file_exists($layoutFile)) {
            die("Layout dosyası bulunamadı! " . $layoutFile);
        }
        if (!file_exists($viewFile)) {
            die("View dosyası bulunamadı! " . $viewFile);
        }

        extract($data);
        ob_start();
        include $viewFile;
        $content = ob_get_clean();
        ob_start();
        include $layoutFile;
        echo ob_get_clean();
    }
}
