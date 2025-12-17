<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailServismodel extends Model
{
    protected $table            = 'detail_servis';
    protected $primaryKey       = 'id_detail_servis';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_detail_servis','id_mekanik', 'id_servis','deskripsi_pekerjaan','biaya_jasa'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    function getData() {
        $data =  $this->db->table($this->table)
        ->select('detail_servis.*, mekanik.nama_mekanik, mekanik.spesialisasi,servis.keluhan')
        ->join('mekanik', 'mekanik.id_mekanik=detail_servis.id_mekanik', 'left')
        ->join('servis', 'servis.id_servis = detail_servis.id_servis', 'left')
        
        ->get()->getResult();
        return $data;
    }
       /**
     * List mekanik untuk dropdown tambah/ubah detail servis
     */
    public function getMekanikDropdown()
    {
        return $this->db->table('mekanik')
            ->select('id_mekanik, nama_mekanik, spesialisasi')
            ->orderBy('nama_mekanik', 'ASC')
            ->get()
            ->getResult();
    }

    /**
     * Ambil data servis tertentu ketika ingin menambah detail
     */
  public function getServisDropdown()
    {
        return $this->db->table('servis')
            ->select('id_servis, keluhan')
            ->get()->getResult();
    }
}

