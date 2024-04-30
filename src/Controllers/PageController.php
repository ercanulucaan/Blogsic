<?php

namespace App\Controllers;

use App\Models\PageModel;

class PageController extends BaseController
{

    private $pageModel;

    public function __construct()
    {
        parent::__construct();
        $this->pageModel = new PageModel();
    }

    public function view($slug = null)
    {
        $this->inject['data'] = $this->pageModel->getPageBySlug($slug) ?? null;
        if(empty($this->inject['data'])) {
            redirect_url('anasayfa');
        }
        $this->inject['meta'] = [
            'title' => $this->inject['settings']['site_title'],
            'keywords' => $this->inject['settings']['site_keywords'],
            'description' => $this->inject['settings']['site_description'],
        ];
        $this->view->render('pages/view', $this->inject);
    }
}
