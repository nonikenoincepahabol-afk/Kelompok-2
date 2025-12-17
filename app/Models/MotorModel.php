<?php

namespace App\Models;

use CodeIgniter\Model;

class MotorModel extends Model
{
    protected $table            = 'motor';
    protected $primaryKey       = 'id_motor';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_pelanggan',
        'merk',
        'model',
        'tahun_pembuatan',
        'nomor_polisi',   // PERBAIKAN
        'id_servis'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;


    // ==============================
    //  JOIN Motor + Pelanggan
    // ==============================
    public function getMotor($id = null)
    {
        $builder = $this->db->table($this->table)
            ->select('motor.*, pelanggan.nama_pelanggan, pelanggan.alamat, pelanggan.telepon')
            ->join('pelanggan', 'pelanggan.id_pelanggan = motor.id_pelanggan', 'left');

        if ($id !== null) {
            $builder->where('motor.id_motor', $id);
            return $builder->get()->getRow(); // 1 data
        }

        return $builder->get()->getResult(); // semua data
    }
}
