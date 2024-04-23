<?php

namespace App\Controllers;

class AboutController extends BaseController
{

    public function index()
    {
        $this->inject['meta'] = [
            'title' => $this->inject['settings']['site_title'] . ' - Hakkımızda',
            'keywords' => $this->inject['settings']['site_keywords'],
            'description' => $this->inject['settings']['site_description'],
        ];
        $this->inject['page'] = [
            'title' => 'Hakkımızda',
            'description' => 'Açıklama...',
        ];
        $this->view->render('about/index', $this->inject);
    }
}
