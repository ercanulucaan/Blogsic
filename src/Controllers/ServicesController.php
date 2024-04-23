<?php

namespace App\Controllers;

class ServicesController extends BaseController
{

    public function index()
    {
        $this->inject['meta'] = [
            'title' => $this->inject['settings']['site_title'] . ' - Hizmetlerimiz',
            'keywords' => $this->inject['settings']['site_keywords'],
            'description' => $this->inject['settings']['site_description'],
        ];
        $this->inject['page'] = [
            'title' => 'Hizmetlerimiz',
            'description' => 'Açıklama...',
        ];
        $this->view->render('services/index', $this->inject);
    }

    public function view($id)
    {
        echo $id."<br>";
        print_r($_GET);
    }
}
