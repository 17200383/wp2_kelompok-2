<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientModel extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'id';
    protected $allowedFields = ['namepat', 'medrec', 'medicine'];

    public function checkExist($namepat)
    {
        return $this->where('namepat', $namepat)->first();
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

    // public function updateMed($id, $medicine, )
    // {
    //     $this->where('id', $id)
    //         ->set('medicine', $medicine)
    //         ->update();
    // }

    public function resetAutoIncrement()
    {
        return $this->db->query("ALTER TABLE {$this->table} AUTO_INCREMENT = 1");
    }
}
