<?php

namespace App\Models;

use App\Libraries\Database;

class BaseModel extends Database
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}
