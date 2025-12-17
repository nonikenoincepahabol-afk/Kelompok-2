<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table            = 'Pembayaran';
    protected $primaryKey       = 'id_pembayaran';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_servis','tgl_pembayaran','jumlah_pembayaran','metode_pembayaraan'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;
}
