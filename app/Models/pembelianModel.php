<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianModel extends Model
{
    protected $table = 'pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $returnType = 'object';
    protected $allowedFields = ['id_supplier', 'tanggal', 'total'];

    // Ambil semua data dengan join supplier
    public function getAllPembelian()
    {
        return $this->db->table($this->table)
            ->select('pembelian.*, supplier.nama')
            ->join('supplier', 'supplier.id_supplier = pembelian.id_supplier', 'left')
            ->get()->getResult();
    }

    // Ambil dropdown supplier
    public function getSupplierDropdown()
    {
        return $this->db->table('supplier')
            ->select('id_supplier, nama')
            ->get()->getResult();
    }
}
