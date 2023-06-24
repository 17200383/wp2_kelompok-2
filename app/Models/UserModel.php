<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['privilege', 'username', 'password'];

    public function verify($username)
    {
        return $this->where('username', $username)->first();
    }

    public function read($username, $colname)
    {
        return $this->select($colname)
                    ->where('username', $username)
                    ->get()
                    ->getRow();
    }

    public function resetAutoIncrement()
    {
        return $this->db->query("ALTER TABLE {$this->table} AUTO_INCREMENT = 1");
    }
}
