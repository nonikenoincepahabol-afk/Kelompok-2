<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useTimestamps = true; // otomatis update created_at & updated_at
    protected $allowedFields = ['username', 'password', 'nama_lengkap', 'role'];
}
