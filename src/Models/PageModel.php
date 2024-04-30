<?php

namespace App\Models;

class PageModel extends BaseModel
{

    protected $table = 'pages';
    protected $primary = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getPageBySlug($slug)
    {
        return $this->db->select()->from($this->table)->where('slug', $slug)->getOne();
    }

}
