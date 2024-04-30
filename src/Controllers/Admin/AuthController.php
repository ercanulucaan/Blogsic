<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AuthController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->view->setLayout('admin');
    }

    public function login()
    {
        if($this->auth->isLoggedIn())
        {
            redirect_url('admin/dashboard/index');
        }
        if($this->input->post())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if(!empty($username) && !empty($password))
            {
                $login = $this->auth->login($username, $password);
                if($login)
                {
                    $this->session->setFlash('status', 'success');
                    $this->session->setFlash('title', 'Harika!');
                    $this->session->setFlash('message', 'Giriş başarılı oldu.');
                    redirect_url('admin/dashboard/index');
                }
                else
                {
                    $this->session->setFlash('status', 'error');
                    $this->session->setFlash('title', 'Ah olamaz!');
                    $this->session->setFlash('message', 'Kullanıcı adı veya şifre hatalı girildi, giriş başarısız oldu.');
                    redirect_url('admin/auth/login');
                }
            }
            else
            {
                $this->session->setFlash('status', 'info');
                $this->session->setFlash('title', 'Şşşş!');
                $this->session->setFlash('message', 'Boş alan bırakmayın.');
                redirect_url('admin/auth/login');
            }
        }
        else
        {
            $this->inject['meta'] = [
                'title' => $this->inject['settings']['site_title'],
                'keywords' => $this->inject['settings']['site_keywords'],
                'description' => $this->inject['settings']['site_description'],
            ];
            $this->view->render('auth/login', $this->inject);
        }
    }

    public function register()
    {
        if($this->auth->isLoggedIn())
        {
            redirect_url('admin/dashboard/index');
        }
        if($this->input->post())
        {
            $full_name = $this->input->post('full_name');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email_address = $this->input->post('email_address');
            $mobile_number = $this->input->post('mobile_number');
            $policy_verify = $this->input->post('policy_verify');
            if(!empty($full_name) &&
                !empty($username) &&
                !empty($password) &&
                !empty($email_address) &&
                !empty($mobile_number) &&
                !empty($policy_verify))
            {
                $register = $this->auth->register([
                    'full_name' => $full_name,
                    'username' => $username,
                    'email_address' => $email_address,
                    'mobile_number' => $mobile_number,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                ]);
                if($register)
                {
                    $this->session->setFlash('status', 'success');
                    $this->session->setFlash('title', 'Harika!');
                    $this->session->setFlash('message', 'Kayıt başarılı oldu.');
                    redirect_url('admin/auth/login');
                }
                else
                {
                    $this->session->setFlash('status', 'error');
                    $this->session->setFlash('title', 'Ah olamaz!');
                    $this->session->setFlash('message', 'Kayıt başarısız oldu.');
                    redirect_url('admin/auth/register');
                }
            }
            else
            {
                $this->session->setFlash('status', 'info');
                $this->session->setFlash('title', 'Şşşş!');
                $this->session->setFlash('message', 'Boş alan bırakmayın.');
                redirect_url('admin/auth/register');
            }
        }
        else
        {
            $this->inject['meta'] = [
                'title' => $this->inject['settings']['site_title'],
                'keywords' => $this->inject['settings']['site_keywords'],
                'description' => $this->inject['settings']['site_description'],
            ];
            $this->view->render('auth/register', $this->inject);
        }
    }

    public function forgot_password()
    {
        if($this->auth->isLoggedIn())
        {
            redirect_url('admin/dashboard/index');
        }
        $this->inject['meta'] = [
            'title' => $this->inject['settings']['site_title'],
            'keywords' => $this->inject['settings']['site_keywords'],
            'description' => $this->inject['settings']['site_description'],
        ];
        $this->view->render('auth/forgot_password', $this->inject);
    }

    public function logout()
    {
        $this->auth->logout();
        redirect_url('admin/auth/login');
    }

}
