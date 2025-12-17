<?php

namespace App\Models;

use CodeIgniter\Model;

class SuplierModel extends Model
{
    protected $table            = 'Supplier';
    protected $primaryKey       = 'id_suplier';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama','alamat', 'email','telepon'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
}
