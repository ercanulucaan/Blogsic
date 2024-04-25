<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->view->setLayout('admin');
    }

    public function index()
    {
        $this->inject['meta'] = [
            'title' => $this->inject['settings']['site_title'],
            'keywords' => $this->inject['settings']['site_keywords'],
            'description' => $this->inject['settings']['site_description'],
        ];
        $this->view->render('dashboard/index', $this->inject);
    }

    public function reports()
    {
        redirect_url('admin');
    }
}
