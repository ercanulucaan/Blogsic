<?php

namespace App\Models;

class SettingsModel extends BaseModel
{

    protected $table = 'settings';
    protected $primary = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllSettings()
    {
        return $this->db->select('*')->from($this->table)->getAll();
    }

    public function getSettingById($id)
    {
        return $this->db->select('*')->from($this->table)->where($this->primary, $id)->getOne();
    }

    public function getSettingValByKey($key)
    {
        return $this->db->select('*')->from($this->table)->where('item_key', $key)->getOne('item_val');
    }

    public function insertSetting($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updateSettingById($id, $data = [])
    {
        return $this->db->update($this->table, $data, $id);
    }

    public function deleteSettingById($id)
    {
        return $this->db->delete($this->table, $id);
    }
}
