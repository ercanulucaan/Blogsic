<?php

namespace App\Models\Admin;

use App\Models\BaseModel;

class UsersModel extends BaseModel
{

    protected $table = 'users';
    protected $primary = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserById($id)
    {
        return $this->db->select()->from($this->table)->where($this->primary, $id)->getOne();
    }

    public function getUserByUsername($username)
    {
        return $this->db->select()->from($this->table)->where('username', $username)->getOne();
    }

    public function insertUser($data)
    {
        return $this->db->insert($this->table, $data);
    }
}
