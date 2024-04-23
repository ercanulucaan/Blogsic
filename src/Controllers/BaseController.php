<?php

namespace App\Controllers;

use App\Libraries\Config;
use App\Libraries\Session;
use App\Libraries\Input;
use App\Libraries\Csrf;
use App\Libraries\Url;
use App\Libraries\View;

use App\Models\SettingsModel;

class BaseController
{
    public $config;
    public $session;
    public $input;
    public $csrf;
    public $url;
    public $view;

    public $inject;

    public $settingsModel;

    public function __construct()
    {
        $this->config = new Config;
        $this->session = new Session;
        $this->input = new Input;
        $this->csrf = new Csrf;
        $this->settingsModel = new SettingsModel();

        foreach ($this->settingsModel->getAllSettings() as $setting) {
            $this->inject['settings'][$setting->item_key] = $setting->item_val;
        }

        $this->view = new View($this);
        $this->view->setLayout($this->config->get('Layout.name'));
    }

    public function errorView()
    {
        $this->inject['meta'] = [
            'title' => $this->inject['settings']['site_title'],
            'keywords' => $this->inject['settings']['site_keywords'],
            'description' => $this->inject['settings']['site_description']
        ];
        $this->view->render('sections/404', $this->inject);
    }
}
