<?php

namespace App\Controllers;

class HomeController extends BaseController
{

    public function index()
    {
        $this->inject['meta'] = [
            'title' => $this->inject['settings']['site_title'],
            'keywords' => $this->inject['settings']['site_keywords'],
            'description' => $this->inject['settings']['site_description'],
        ];
        $this->view->render('home/index', $this->inject);
    }
}
