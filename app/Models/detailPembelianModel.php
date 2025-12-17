<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPembelianModel extends Model
{
    protected $table = 'detail_pembelian';
    protected $primaryKey = 'id_detail_pembelian';
    protected $returnType = 'object';
    protected $allowedFields = ['id_pembelian', 'id_suku_cadang', 'jumlah', 'harga_beli_satuan'];

    // Ambil semua data dengan join pembelian dan suku_cadang
    public function getAllDetail()
    {
        return $this->db->table($this->table)
            ->select('detail_pembelian.*, pembelian.tanggal, suku_cadang.nama_suku_cadang')
            ->join('pembelian', 'pembelian.id_pembelian = detail_pembelian.id_pembelian', 'left')
            ->join('suku_cadang', 'suku_cadang.id_suku_cadang = detail_pembelian.id_suku_cadang', 'left')
            ->get()->getResult();
    }

    // Dropdown pembelian
    public function getPembelianDropdown()
    {
        return $this->db->table('pembelian')
            ->select('id_pembelian, tanggal')
            ->get()->getResult();
    }

    // Dropdown suku_cadang
    public function getSukuCadangDropdown()
    {
        return $this->db->table('suku_cadang')
            ->select('id_suku_cadang, nama_suku_cadang')
            ->get()->getResult();
    }
}
