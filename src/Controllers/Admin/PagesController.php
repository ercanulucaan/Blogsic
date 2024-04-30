<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\PagesModel;

class PagesController extends BaseController
{

    private $pagesModel;

    public function __construct()
    {
        parent::__construct();
        $this->view->setLayout('admin');
        if(!$this->auth->isLoggedIn())
        {
            redirect_url('admin/auth/login');
        }
        $this->pagesModel = new PagesModel();
    }

    public function index()
    {
        $this->inject['meta'] = [
            'title' => $this->inject['settings']['site_title'],
            'keywords' => $this->inject['settings']['site_keywords'],
            'description' => $this->inject['settings']['site_description'],
        ];
        $this->inject['data'] = $this->pagesModel->getAllPages();
        $this->view->render('pages/index', $this->inject);
    }

    public function add()
    {
        if($this->input->post())
        {
            $order_id = $this->input->post('order_id') ?? null;
            $title = $this->input->post('title') ?? null;
            $slug = $this->input->post('slug') ?? null;
            $description = $this->input->post('description') ?? null;
            $keywords = $this->input->post('keywords') ?? null;
            $content = $this->input->post('content') ?? null;
            $status = $this->input->post('status') ?? null;
            $show_in_menu = $this->input->post('show_in_menu') ?? null;
            if(!empty($title) && !empty($slug) && !empty($description) && !empty($keywords) && !empty($content) && !empty($status))
            {
                $insert = $this->pagesModel->insertPage([
                    'order_id' => $order_id ?? '0',
                    'title' => $title,
                    'slug' => $slug,
                    'description' => $description,
                    'keywords' => $keywords,
                    'content' => $content,
                    'status' => $status ? '1' : '0',
                    'show_in_menu' => $show_in_menu ? '1' : '0',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
                if($insert)
                {
                    $this->session->setFlash('status', 'success');
                    $this->session->setFlash('title', 'Harika!');
                    $this->session->setFlash('message', 'Kayıt başarılı oldu.');
                    redirect_url('admin/pages/index');
                }
                else
                {
                    $this->session->setFlash('status', 'error');
                    $this->session->setFlash('title', 'Hata!');
                    $this->session->setFlash('message', 'Kayıt başarısız oldu.');
                    redirect_url('admin/pages/index');
                }
            }
        }
        else
        {
            $this->inject['meta'] = [
                'title' => $this->inject['settings']['site_title'],
                'keywords' => $this->inject['settings']['site_keywords'],
                'description' => $this->inject['settings']['site_description'],
            ];
            $this->view->render('pages/add', $this->inject);
        }
    }

    public function edit($id = null)
    {
        if($this->input->post())
        {
            $order_id = $this->input->post('order_id') ?? null;
            $title = $this->input->post('title') ?? null;
            $slug = $this->input->post('slug') ?? null;
            $description = $this->input->post('description') ?? null;
            $keywords = $this->input->post('keywords') ?? null;
            $content = $this->input->post('content') ?? null;
            $status = $this->input->post('status') ?? null;
            $show_in_menu = $this->input->post('show_in_menu') ?? null;
            if(!empty($title) && !empty($slug) && !empty($description) && !empty($keywords) && !empty($content) && !empty($status))
            {
                $update = $this->pagesModel->updatePage([
                    'order_id' => $order_id ?? '0',
                    'title' => $title,
                    'slug' => $slug,
                    'description' => $description,
                    'keywords' => $keywords,
                    'content' => $content,
                    'status' => $status ? '1' : '0',
                    'show_in_menu' => $show_in_menu ? '1' : '0',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ], $id);
                if($update)
                {
                    $this->session->setFlash('status', 'success');
                    $this->session->setFlash('title', 'Harika!');
                    $this->session->setFlash('message', 'Düzenleme başarılı oldu.');
                    redirect_url('admin/pages/index');
                }
                else
                {
                    $this->session->setFlash('status', 'error');
                    $this->session->setFlash('title', 'Hata!');
                    $this->session->setFlash('message', 'Düzenleme başarısız oldu.');
                    redirect_url('admin/pages/index');
                }
            }
        }
        else
        {
            $this->inject['meta'] = [
                'title' => $this->inject['settings']['site_title'],
                'keywords' => $this->inject['settings']['site_keywords'],
                'description' => $this->inject['settings']['site_description'],
            ];
            $this->inject['data'] = $this->pagesModel->getPageById($id);
            $this->view->render('pages/edit', $this->inject);
        }
    }

}
