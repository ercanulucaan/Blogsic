<?php

namespace App\Libraries;

use App\Models\Admin\UsersModel;

class Auth
{
    protected $session;
    protected $usersModel;

    public function __construct()
    {
        $this->session = new Session();
        $this->usersModel = new UsersModel();
    }

    public function login($username, $password)
    {
        $user = $this->usersModel->getUserByUsername($username);
        if ($user && password_verify($password, $user->password))
        {
            $this->session->set('user_id', $user->id);
            return true;
        }

        return false;
    }

    public function register($data)
    {
        $user = $this->usersModel->getUserByUsername($data['username']);
        if(!empty($user))
        {
            return false;
        }
        else
        {
            return $this->usersModel->insertUser($data);
        }
    }

    public function logout()
    {
        $this->session->remove('user_id');
    }

    public function user()
    {
        if ($this->session->has('user_id'))
        {
            return $this->usersModel->getUserById($this->session->get('user_id'));
        }

        return null;
    }

    public function isLoggedIn()
    {
        if(!empty($this->session->has('user_id')))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
