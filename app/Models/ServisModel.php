<?php

namespace App\Models;

use CodeIgniter\Model;

class ServisModel extends Model
{
    protected $table            = 'servis';
    protected $primaryKey       = 'id_servis';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_motor','tanggal_masuk','tanggal_selesai','keluhan','status','total_biaya'];
    
    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    public function getAll()
{
    return $this->db->table('servis')
            ->select('servis.*, 
                      motor.merk, motor.model, motor.nomor_polisi,
                      pelanggan.nama_pelanggan')
            ->join('motor', 'motor.id_motor = servis.id_motor')
            ->join('pelanggan', 'pelanggan.id_pelanggan = motor.id_pelanggan')
            ->orderBy('servis.id_servis', 'DESC')
            ->get()
            ->getResult();
}

}
