<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

    public function index()
    {
        echo 'Admin Dashboard';
    }

    public function users()
    {
        echo 'Admin Users';
    }
}
