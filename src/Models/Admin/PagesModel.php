<?php

namespace App\Models\Admin;

use App\Models\BaseModel;

class PagesModel extends BaseModel
{

    protected $table = 'pages';
    protected $primary = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPages()
    {
        return $this->db->select()->from($this->table)->getAll();
    }

    public function getPageById($id)
    {
        return $this->db->select()->from($this->table)->where($this->primary, $id)->getOne();
    }

    public function insertPage($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updatePage($data, $id)
    {
        return $this->db->update($this->table, $data, $id);
    }

}
