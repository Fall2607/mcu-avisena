<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Nilai extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_nilai_normal';
    protected $primaryKey       = 'id_nilai_normal';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_nilai_normal', 'id_tindakan', 'kategori', 'nilai_min', 'nilai_max'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getNilaiNormalByTindakan(int $id_tindakan): array
    {
        return $this->select('
                tb_nilai_normal.id_nilai_normal,
                tb_tindakan.nama_tindakan,
                tb_nilai_normal.kategori,
                tb_nilai_normal.nilai_min,
                tb_nilai_normal.nilai_max
            ')
            ->join('tb_tindakan', 'tb_nilai_normal.id_tindakan = tb_tindakan.id_tindakan')
            ->where('tb_nilai_normal.id_tindakan', $id_tindakan)
            ->findAll();
    }
}
