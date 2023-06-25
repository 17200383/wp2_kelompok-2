<?php

namespace App\Models;

use CodeIgniter\Model;

class MedicineModel extends Model
{
    protected $table = 'medicines';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'comments', 'stock','lastmodified'];

    public function checkExist($name)
    {
        return $this->where('name', $name)->first();
    }

    public function getId($name)
    {
        $row = $this->select('id')
            ->where('name', $name)
            ->get()
            ->getRow();

        if ($row) {
            return $row->id;
        } else {
            return null;
        }
    }

    public function updateRow($id, $medicine)
    {
        $this->where('id', $id)
            ->set($medicine)
            ->update();
    }

    public function resetAutoIncrement()
    {
        return $this->db->query("ALTER TABLE {$this->table} AUTO_INCREMENT = 1");
    }
}
